<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\BackedEnd\Reset;
use App\Livewire\FrontEnd\FrontEnd;
use Illuminate\Support\Facades\Route;
use App\Livewire\BackedEnd\BackedEnd;   

Route::get('/', FrontEnd::class); // Route to Livewire component
Route::post('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/lupa-kata-sandi', [FrontEnd::class]); // Route to Livewire component
Route::get('/reset', Reset::class);
Route::prefix('admin')->middleware(['auth', 'session.expiration'])->group(function () { 
Route::get('/dashboard', BackedEnd::class); // Route to Livewire component
});

