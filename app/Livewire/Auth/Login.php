<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $username, $password,$organisasiOptions;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    public function login()
    {
        $this->validate();

        $user = User::where('username', $this->username)->first();

        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->dispatch('loginError', 'User tidak ditemukan.');
            return;
        }

        if (!$user->is_active) {
            $this->dispatch('loginError', 'Akun Anda TIDAK AKTIF');
            return;
        }

        Auth::login($user);
        $this->dispatch('loginSuccess', 'Login Berhasil');
        return redirect()->to('/admin/dashboard'); // Redirect to home or dashboard
    }
        public function render()
    {
        return view('livewire.auth.login');
    }
}
