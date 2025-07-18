<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\AbsenReguler;
use App\Models\AbsenRegulerPHL;
use App\Models\DtPHL;
use App\Models\DtPNS;
use App\Models\Keys;
use App\Models\Userphl;
use App\Models\Userpns;
use App\Traits\ResponseTrait;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    use ResponseTrait;

    public function registerASN(Request $request)
    {
        $nip = $request->input('nip');
        $uuid = $request->input('uuid');

        $user = Userpns::where('nip', $nip)->first();
        $asn = DtPNS::where('nip', $nip)->first();

        if (!$asn) {
            return $this->formatResponse(400, "NIP salah atau belum terdaftar", null);
        }

        if ($user) {
            return $this->formatResponse(400, "Pendaftaran gagal. Anda sudah terdaftar", null);
        }

        // Cek data absen (sudah pernah absen / belum)
        $isPresensiExists = AbsenReguler::where('nip', $nip)->first();

        DB::BeginTransaction();

        if ($isPresensiExists) {
            try {
                $existingUserKey = Userpns::with('key')->where('nip', $asn->nip)->orWhere('uuid', $uuid)->first();

                if (!$existingUserKey) {
                    $newUser = new Userpns();
                    $newUser->uuid = $uuid;
                    $newUser->nip = $asn->nip;
                    $newUser->nama = $asn->nama;
                    $newUser->kd_opd = $asn->kd_opd;
                    $newUser->kd_unit_opd = $asn->kd_unit_opd;
                    $newUser->kd_subunit_opd = $asn->kd_subunit_opd;
                    $newUser->id_lokasi = $asn->id_lokasi;

                    $newUser->save();

                    $existingKey = Keys::where('key', $uuid)->first();

                    if (!$existingKey) {
                        $timestamp = microtime(true);
                        $timestamp_divided = $timestamp / 1000.0;

                        $key = new Keys();
                        $key->user_id = $newUser->id;
                        $key->key = $newUser->uuid;
                        $key->level = 1;
                        $key->date_created = $timestamp_divided;
                        $key->save();

                        AbsenReguler::where('nip', $nip)->update(['uuid' => $uuid]);
                    }
                }

                DB::commit();

                return $this->formatResponse(200, 'User berhasil didaftarkan', null);
            } catch (\Throwable $th) {
                DB::rollBack();

                return $this->formatResponse(400, 'Gagal mendaftarkan data user PNS', null);
            }
        } else {
            try {
                $newUser = new Userpns();
                $newUser->uuid = $uuid;
                $newUser->nip = $asn->nip;
                $newUser->nama = $asn->nama;
                $newUser->kd_opd = $asn->kd_opd;
                $newUser->kd_unit_opd = $asn->kd_unit_opd;
                $newUser->kd_subunit_opd = $asn->kd_subunit_opd;
                $newUser->id_lokasi = $asn->id_lokasi;

                $newUser->save();

                $existingKey = Keys::where('key', $uuid)->first();

                if (!$existingKey) {
                    $timestamp = microtime(true);
                    $timestamp_divided = $timestamp / 1000.0;

                    $key = new Keys();
                    $key->user_id = $newUser->id;
                    $key->key = $newUser->uuid;
                    $key->level = 1;
                    $key->date_created = $timestamp_divided;
                    $key->save();
                }

                DB::commit();

                return $this->formatResponse(200, 'User berhasil didaftarkan', null);
            } catch (\Throwable $th) {
                DB::rollBack();

                return $this->formatResponse(400, 'Gagal menambahkan data user PNS', null);
            }
        }
    }

    public function registerPHL(Request $request)
    {
        $nik = $request->input('nik');
        $uuid = $request->input('uuid');

        $user = Userphl::where('nik', $nik)->first();
        $phl = DtPHL::where('nik', $nik)->first();

        if (!$phl) {
            return $this->formatResponse(400, "NIK salah atau belum terdaftar", null);
        }

        if ($user) {
            return $this->formatResponse(400, "Pendaftaran gagal. Anda sudah terdaftar", null);
        }

        // Cek data absen (sudah pernah absen / belum)
        $isPresensiExists = AbsenRegulerPHL::where('nik', $nik)->first();

        DB::BeginTransaction();

        if ($isPresensiExists) {
            try {
                $existingUserKey = Userphl::with('key')->where('nik', $phl->nik)->orWhere('uuid', $uuid)->first();

                if (!$existingUserKey) {
                    $newUser = new Userphl();
                    $newUser->uuid = $uuid;
                    $newUser->nik = $phl->nik;
                    $newUser->nama = $phl->nama;
                    $newUser->kd_opd = $phl->kd_opd;
                    $newUser->kd_unit_opd = $phl->kd_unit_opd;
                    $newUser->kd_subunit_opd = $phl->kd_subunit_opd;
                    $newUser->id_lokasi = $phl->id_lokasi;

                    $newUser->save();

                    $existingKey = Keys::where('key', $uuid)->first();

                    if (!$existingKey) {
                        $timestamp = microtime(true);
                        $timestamp_divided = $timestamp / 1000.0;

                        $key = new Keys();
                        $key->user_id = $newUser->id;
                        $key->key = $newUser->uuid;
                        $key->level = 1;
                        $key->date_created = $timestamp_divided;
                        $key->save();

                        AbsenRegulerPHL::where('nik', $nik)->update(['uuid' => $uuid]);
                    }
                }

                DB::commit();

                return $this->formatResponse(200, 'User berhasil didaftarkan', null);
            } catch (\Throwable $th) {
                DB::rollBack();

                return $this->formatResponse(400, 'Gagal mendaftarkan data user PNS', null);
            }
        } else {
            try {
                $newUser = new Userphl();
                $newUser->uuid = $uuid;
                $newUser->nik = $phl->nik;
                $newUser->nama = $phl->nama;
                $newUser->kd_opd = $phl->kd_opd;
                $newUser->kd_unit_opd = $phl->kd_unit_opd;
                $newUser->kd_subunit_opd = $phl->kd_subunit_opd;
                $newUser->id_lokasi = $phl->id_lokasi;

                $newUser->save();

                $existingKey = Keys::where('key', $uuid)->first();

                if (!$existingKey) {
                    $timestamp = microtime(true);
                    $timestamp_divided = $timestamp / 1000.0;

                    $key = new Keys();
                    $key->user_id = $newUser->id;
                    $key->key = $newUser->uuid;
                    $key->level = 1;
                    $key->date_created = $timestamp_divided;
                    $key->save();
                }

                DB::commit();

                return $this->formatResponse(200, 'User berhasil didaftarkan', null);
            } catch (\Throwable $th) {
                DB::rollBack();

                return $this->formatResponse(400, 'Gagal menambahkan data user PNS', null);
            }
        }
    }

    public function loginASN(Request $request)
    {
        $nip = $request->input('nip');
        $uuid = $request->input('uuid');

        $user = Userpns::where('nip', $nip)->where('uuid', $uuid)->first();

        if (!$user) {
            return $this->formatResponse(401, "Unauthorized", null);
        }

        $now = time();

        $payload = [
            'iat'       => $now,
            'exp'       => $now + (60 * 60),
            'uuid'      => $user->uuid,
            'usertype'  => 'ASN'
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        return $this->formatResponse(200, 'Login Success', [
            'access_token' => (string)$token,
            'token_type' => 'bearer',
            'expires_in' => $now + (60 * 60),
        ]);
    }

    public function loginPHL(Request $request)
    {
        $nik = $request->input('nik');
        $uuid = $request->input('uuid');

        $user = Userphl::where('nik', $nik)->where('uuid', $uuid)->first();

        if (!$user) {
            return $this->formatResponse(401, "Unauthorized", null);
        }

        $now = time();

        $payload = [
            'iat'       => $now,
            'exp'       => $now + (60 * 60),
            'uuid'      => $user->uuid,
            'usertype'  => 'PHL'
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        return $this->formatResponse(200, 'Login Success', [
            'access_token' => (string)$token,
            'token_type' => 'bearer',
            'expires_in' => $now + (60 * 60),
        ]);
    }

    public function me(Request $request)
    {
        $token = $request->header('Authorization');

        if ($token) {
            $token = Str::replaceFirst('Bearer ', '', $token);

            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));

            $user = null;
            if ($decoded->usertype == 'ASN') {
                $user = Userpns::with([
                    'dtPns',
                    'dtPns.tblOpd:nama_opd',
                ])->where('uuid', $decoded->uuid)->first();
            } else if ($decoded->usertype == 'PHL') {
                $user = Userphl::with([
                    'dtPhl',
                    'dtPhl.tblOpd:nama_opd',
                ])->where('uuid', $decoded->uuid)->first();
            }
            return $this->formatResponse(200, 'Success', $user);
        }

        return $this->formatResponse(200, 'Success', []);
    }
}
