<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

use App\Livewire\FrontEnd\Home;
use App\Livewire\BackEnd\ResetPns;
use App\Livewire\BackEnd\Dashboard;
use App\Livewire\FrontEnd\FrontEnd;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class); // Route to Livewire component
Route::post('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/lupa-kata-sandi', [FrontEnd::class]); // Route to Livewire component

Route::prefix('admin')
->middleware(['auth', 'session.expiration'])
->group(function () { 
    Route::get('/dashboard', Dashboard::class); // Route to Livewire component
    Route::get('/reset', ResetPns::class);
});

