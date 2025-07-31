<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

use App\Livewire\FrontEnd\Home;
use App\Livewire\BackEnd\ResetPns;
use App\Livewire\BackEnd\Rest\Api;
use App\Livewire\BackEnd\Dashboard;
use App\Livewire\FrontEnd\FrontEnd;
use Illuminate\Support\Facades\Route;
use App\Livewire\BackEnd\FileDownload\Apk;
use App\Livewire\BackEnd\Kehadiran\HadirAsn;
use App\Livewire\BackEnd\Referensi\JamAbsen;
use App\Livewire\BackEnd\Referensi\LokasiPd;
use App\Livewire\BackEnd\Referensi\ResetAsn;
use App\Livewire\BackEnd\RekapData\RekapAsn;
use App\Livewire\BackEnd\DataPegawai\DataAsn;
use App\Livewire\BackEnd\Referensi\KordinatPd;
use App\Livewire\BackEnd\RekapData\HapusRekap;
use App\Livewire\BackEnd\Kehadiran\HadirNonAsn;
use App\Livewire\BackEnd\Referensi\ResetNonAsn;
use App\Livewire\BackEnd\Referensi\TandaTangan;
use App\Livewire\BackEnd\RekapData\RekapNonAsn;
use App\Livewire\BackEnd\DataPegawai\DataNonAsn;
use App\Livewire\BackEnd\Referensi\LiburSekolah;
use App\Livewire\BackEnd\Referensi\OrganisasiPd;
use App\Livewire\BackEnd\CetakData\CetakRekapAsn;
use App\Livewire\BackEnd\Referensi\KordinatPdWfh;
use App\Livewire\BackEnd\Referensi\LiburNasional;
use App\Livewire\BackEnd\Referensi\KordinatPdSenin;
use App\Livewire\BackEnd\CetakData\CetakRekapNonAsn;
use App\Livewire\BackEnd\SinkronisasiData\ServerDown;
use App\Livewire\BackEnd\SinkronisasiData\DataPresensiAsn;
use App\Livewire\BackEnd\SinkronisasiData\DataPresensiNonAsn;
use App\Livewire\BackEnd\PemulihanData\PemulihanAsn;
use App\Livewire\BackEnd\PemulihanData\PemulihanNonAsn;


Route::get('/', Home::class); // Route to Livewire component
Route::post('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/lupa-kata-sandi', [FrontEnd::class]); // Route to Livewire component


Route::prefix('admin')
->middleware(['auth', 'session.expiration'])
->group(function () { 
    Route::get('/dashboard', Dashboard::class); // Route to Livewire component
    Route::get('/reset', ResetPns::class);
    Route::get('/data_pegawai/data_asn', DataAsn::class);
    Route::get('/data_pegawai/data_non_asn', DataNonAsn::class);
    Route::get('/sinkronisasi_data/data_presensi_asn', DataPresensiAsn::class);
    Route::get('/sinkronisasi_data/data_presensi_non_asn', DataPresensiNonAsn::class);
    Route::get('/rekap_data/rekap_asn', RekapAsn::class);
    Route::get('/rekap_data/rekap_non_asn', RekapNonAsn::class);
    Route::get('/rekap_data/hapus_rekap', HapusRekap::class);
    Route::get('/cetak_rekap/cetak_rekap_asn', CetakRekapAsn::class);
    Route::get('/cetak_rekap/cetak_rekap_non_asn', CetakRekapNonAsn::class);
    Route::get('/referensi/organisasi_pd', OrganisasiPd::class);
    Route::get('/referensi/lokasi_pd', LokasiPd::class);
    Route::get('/referensi/kordinat_pd', KordinatPd::class);
    Route::get('/referensi/jam', JamAbsen::class);
    Route::get('/referensi/kordinat_pd_senin', KordinatPdSenin::class);
    Route::get('/referensi/kordinat_pd_wfh', KordinatPdWfh::class);
    Route::get('/referensi/libur_nasional', LiburNasional::class);
    Route::get('/referensi/libur_sekolah', LiburSekolah::class);
    Route::get('/referensi/reset_asn', ResetAsn::class);
    Route::get('/referensi/reset_non_asn', ResetNonAsn::class);
    Route::get('/referensi/tanda_tangan', TandaTangan::class);
    Route::get('/kehadiran/hadir_asn', HadirAsn::class);
    Route::get('/kehadiran/hadir_non_asn', HadirNonAsn::class);
    Route::get('/rest/api', Api::class);
    Route::get('/file_download/apk', Apk::class);
    Route::get('/sinkronisasi_data/server_down', ServerDown::class);
    Route::get('/pemulihan_data/pemulihan_asn', PemulihanAsn::class);
    Route::get('/pemulihan_data/pemulihan_non_asn', PemulihanNonAsn::class);
});

