<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $returnUrl;

    public function login(){
        $this->validate([
            'email' => 'required|exists:admins,email',
            'password' => 'required'
        ]);

        if(auth()->guard('admin')->attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect()->intended($this->returnUrl);
        }

        return $this->addError('password','Incorrect password.');
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
