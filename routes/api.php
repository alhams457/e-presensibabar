<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\PresensiController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('/v2/android')->group(function () {
    Route::post('daftar_pegawai',               [AuthController::class, 'registerASN']);
    Route::post('daftar_pegawai/phl',           [AuthController::class, 'registerPHL']);

    Route::post('login',                        [AuthController::class, 'loginASN']);
    Route::post('login/phl',                    [AuthController::class, 'loginPHL']);

    Route::post('refresh_token',                [AuthController::class, 'refresh']);

    Route::middleware('jwt.auth')->group(function() {
        Route::get('me',                            [AuthController::class, 'me']);
        Route::post('presensi',                      [PresensiController::class, 'presensi']);
    });
});

Route::get('/test', function () {
    return time();
});
