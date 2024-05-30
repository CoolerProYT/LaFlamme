<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Booking as BookingModel;

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
        $this->getBookings();
    }

    public function render()
    {
        return view('livewire.admin.booking');
    }
}
