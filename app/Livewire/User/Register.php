<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        return redirect()->route('user.login');
    }

    public function render()
    {
        return view('livewire.user.register');
    }
}
