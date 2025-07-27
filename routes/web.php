<?php

use App\Livewire\BackedEnd\BackedEnd;
use App\Livewire\FrontEnd\FrontEnd;
use Illuminate\Support\Facades\Route;


Route::get('/', FrontEnd::class); // Route to Livewire component
Route::get('/daftar', [FrontEnd::class, 'daftar']); // Route to Livewire component
Route::get('/lupa-kata-sandi', [FrontEnd::class, 'lupaKataSandi']); // Route to Livewire component

Route::prefix('admin')->middleware('auth')->group(function () { 
    Route::get('/dashboard', BackedEnd::class); // Route to Livewire component
});

