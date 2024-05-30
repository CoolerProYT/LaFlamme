<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public $returnUrl;

    public function login()
    {
        $this->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if(Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect()->to($this->returnUrl);
        }

        return $this->addError('password', 'Incorrect password.');
    }

    public function render()
    {
        return view('livewire.user.login');
    }
}
