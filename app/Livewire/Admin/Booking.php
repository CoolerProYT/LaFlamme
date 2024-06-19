<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Booking as BookingModel;
use Resend;

class Booking extends Component
{
    public $flag = 'pending';
    public $bookings;

    public function mount(){
        $this->getBookings();
    }

    public function getBookings(){
        $this->bookings = BookingModel::where('status',$this->flag)->get();
    }

    public function updateFlag($flag){
        $this->flag = $flag;
        $this->getBookings();
    }

    public function completeBooking($id){
        $booking = BookingModel::find($id);
        $booking->status = 'completed';
        $booking->save();

        $user_email = $booking->user->email;

        $resend = Resend::client(env('RESEND_API_KEY'));

        $resend->emails->send([
            'from' => 'noreply <LaFlamme@jinitaimei.cloud>',
            'to' => [$user_email],
            'subject' => 'Ticket Used',
            'text' => 'Your ticket has been used. Thank you for coming to our event.',
        ]);

        $this->getBookings();
    }

    public function render()
    {
        return view('livewire.admin.booking');
    }
}
