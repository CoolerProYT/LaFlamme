<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Booking;

class BookingScan extends Component
{
    public $id;
    public $booking;

    public function mount()
    {
        $this->booking = Booking::find($this->id);
    }

    public function completeBooking(){
        $this->booking->status = 'completed';
        $this->booking->save();
        return redirect()->route('admin.booking');
    }

    public function render()
    {
        return view('livewire.admin.booking-scan');
    }
}
