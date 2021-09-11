<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix_name;
    public $email;
    public $password;
    public $password_confirmation;

    public $showSuccess = false;

    public function render()
    {
        return view('livewire.auth.register-component');
    }

    public function submit()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'suffix_name' => $this->suffix_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->showSuccess = true;
    }
}
