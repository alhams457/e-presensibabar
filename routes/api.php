<?php

use App\Http\Controllers\api\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('/v2/android')->group(function () {
    Route::post('daftar_pegawai',               [AuthController::class, 'registerPNS']);
    Route::post('daftar_pegawai/phl',           [AuthController::class, 'registerPHL']);
});

Route::get('/test', function () {
    return time();
});
