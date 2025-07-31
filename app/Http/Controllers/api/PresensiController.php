<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\AbsenReguler;
use App\Models\AbsenRegulerPhl;
use App\Models\Userphl;
use App\Models\Userpns;
use App\Traits\ResponseTrait;
use Carbon\Carbon;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresensiController extends Controller
{
    use ResponseTrait;

    public function presensi(Request $request)
    {
        // Cek tipe user (ASN/PHL)
        $token = $request->bearerToken();

        $decoded = JWT::decode((string)$token, new Key(env('JWT_SECRET'), 'HS512'));
        $usertype = $decoded->usertype;

        $user = null;
        $jamAbsen = null;

        if ($usertype == 'ASN') {
            $user = Userpns::with('dtPns.jamAbsen')->where('uuid', $decoded->uuid)->firstOrFail();
            $jamAbsen = $user->dtPns->jamAbsen;
        } else if ($usertype == 'PHL') {
            $user = Userphl::with('dtPhl.jamAbsen')->where('uuid', $decoded->uuid)->firstOrFail();
            $jamAbsen = $user->dtPhl->jamAbsen;
        }

        // Cek jam absen
        $now = Carbon::now();

        if (in_array($now->format('D'), ['Sat', 'Sun'])) {
            return $this->formatResponse(
                400,
                "Selamat menikmati akhir pekan."
            );
        }

        $startBreakin = $jamAbsen->start_breakin;
        $startCheckout = $jamAbsen->start_checkout;

        if ($now->format('D') == 'Fri') {
            $startBreakin = $jamAbsen->start_breakin_jumat;
            $startCheckout = $jamAbsen->start_checkout_jumat;
        }

        if ($now->timestamp < $jamAbsen->start_app->timestamp || $now->timestamp > $jamAbsen->stop->timestamp) {
            return $this->formatResponse(
                400,
                "Anda tidak dapat melakukan absen di luar jam {$jamAbsen->start_app->format('H:i:s')} - {$jamAbsen->stop->format('H:i:s')}"
            );
        }

        $status = $request->input('status');

        if ($status == '3' && $now->timestamp < $startBreakin->timestamp) {
            return $this->formatResponse(
                400,
                "Anda belum bisa melakukan presensi siang, dimulai pukul {$startBreakin->format('H:i:s')}"
            );
        }

        if ($status == '4' && $now->timestamp < $startCheckout->timestamp) {
            return $this->formatResponse(
                400,
                "Anda belum bisa melakukan presensi sore, dimulai pukul {$startCheckout->format('H:i:s')}"
            );
        }

        DB::beginTransaction();
        try {
            // Update Data Absen
            $absen = null;

            if ($usertype == 'ASN') {
                $absen = new AbsenReguler();
                $absen->lat = $request->input('lat');
                $absen->lon = $request->input('lon');
                $absen->waktu = $now->format('H:i:s');
                $absen->tanggal = $now->format('Y-m-d');
                $absen->nama = $request->input('nama');
                $absen->status = $request->input('status');
                $absen->uuid = $request->input('uuid');
                $absen->nip = $request->input('nip');
                $absen->save();

            } else if ($usertype == 'PHL') {
                $absen = new AbsenRegulerPhl();
                $absen->lat = $request->input('lat');
                $absen->lon = $request->input('lon');
                $absen->waktu = $now->format('H:i:s');
                $absen->tanggal = $now->format('Y-m-d');
                $absen->nama = $request->input('nama');
                $absen->status = $request->input('status');
                $absen->uuid = $request->input('uuid');
                $absen->nik = $request->input('nik');
                $absen->save();

            }

            DB::commit();

            return $this->formatResponse(200, 'Success', $absen);

        } catch (\Throwable $th) {
            DB::rollBack();

            return $this->formatResponse(500, 'Gagal presensi', null);
        }
    }
}
