<?php

namespace App\Livewire\Auth;

use App\Models\TblOrganisasi;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Str;

class Register extends Component
{


    public $name, $email, $password, $password_confirmation;
    public $organisasiOptions = [];


    public function register()
    {
        $this->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);
        $ipAddress = request()->ip(); // Get the IP address
        User::create([
            'username' => $this->username,
            'usertype' => '3',
            'is_active' => '1',
            'ip_add_reg' => $ipAddress,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'remember_token' => Str::random(60),
            'created_at'=>now(),
            'kd_opd' => $this->organisasi,
        ]);

        session()->flash('message', 'Pengguna berhasil mendaftar!');
        return redirect()->to('/home'); // Redirect to home or desired page
    }
    

    public $options = [];

    public function mount() // Mount the component
    {
        $this->select2();  
    }

    public function select2()
    {
        $this->organisasiOptions = TblOrganisasi::getOpdWithoutUsers(); // Adjust the route name
        $this->options = $this->organisasiOptions;
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
