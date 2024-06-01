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
            'password' => 'required|min:8|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/',
            'password_confirmation' => 'same:password'
        ],[
            'password.regex' => 'Password must contain at least one uppercase letter, one number, and one special character.'
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
