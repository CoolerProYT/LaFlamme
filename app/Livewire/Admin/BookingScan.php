<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Booking;
use Resend;

class BookingScan extends Component
{
    public $id;
    public $booking;

    public function mount()
    {
        $this->booking = Booking::where('booking_id', $this->id)->first();
    }

    public function completeBooking(){
        $this->booking->status = 'completed';
        $this->booking->save();

        $user_email = $this->booking->user->email;

        $resend = Resend::client(env('RESEND_API_KEY'));

        $resend->emails->send([
            'from' => 'noreply <LaFlamme@jinitaimei.cloud>',
            'to' => [$user_email],
            'subject' => 'Ticket Used',
            'text' => 'Your ticket has been used. Thank you for coming to our event.',
        ]);

        return redirect()->route('admin.booking');
    }

    public function render()
    {
        return view('livewire.admin.booking-scan');
    }
}
