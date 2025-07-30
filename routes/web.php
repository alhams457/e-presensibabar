<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

use App\Livewire\FrontEnd\Home;
use App\Livewire\BackEnd\ResetPns;
use App\Livewire\BackEnd\Dashboard;
use App\Livewire\FrontEnd\FrontEnd;
use Illuminate\Support\Facades\Route;
use App\Livewire\BackEnd\DataPegawai\DataAsn;
use App\Livewire\BackEnd\DataPegawai\DataNonAsn;
use App\Livewire\BackEnd\SinkronisasiData\DataPresensiAsn;
use App\Livewire\BackEnd\SinkronisasiData\DataPresensiNonAsn;
use App\Livewire\BackEnd\RekapData\RekapAsn;
use App\Livewire\BackEnd\RekapData\RekapNonAsn;
use App\Livewire\BackEnd\RekapData\HapusRekap;
use App\Livewire\BackEnd\CetakData\CetakRekapAsn;
use App\Livewire\BackEnd\CetakData\CetakRekapNonAsn;
use App\Livewire\BackEnd\Referensi\OrganisasiPd;

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
});

