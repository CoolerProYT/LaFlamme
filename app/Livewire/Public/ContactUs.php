<?php

namespace App\Livewire\Public;

use Livewire\Component;
use Resend;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $sent = false;

    public function send(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $resend = Resend::client(env('RESEND_API_KEY'));

        $resend->emails->send([
            'from' => 'Spark Contact Us <spark@jinitaimei.cloud>',
            'to' => ['veronlam1818@gmail.com'],
            'subject' => $this->subject,
            'text' => $this->message,
            'reply_to' => "{$this->name} <{$this->email}>",
        ]);

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);

        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.public.contact-us');
    }
}
