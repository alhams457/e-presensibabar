<?php

use App\Livewire\BackedEnd\Reset;
use App\Livewire\FrontEnd\FrontEnd;
use App\Livewire\BackedEnd\BackedEnd;
use Illuminate\Support\Facades\Route;

Route::get('/', FrontEnd::class); // Route to Livewire component
Route::get('/daftar',    [Register::class]); // Route to Livewire component
Route::get('/lupa-kata-sandi', [FrontEnd::class]); // Route to Livewire component
Route::get('/reset', Reset::class);
Route::prefix('admin')->middleware(['auth', 'session.expiration'])->group(function () { 
Route::get('/dashboard', BackedEnd::class); // Route to Livewire component
});

