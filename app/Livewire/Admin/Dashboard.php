<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalBooking;
    public $totalPending;
    public $totalCompleted;

    public $bookings;

    public function mount(){
        $this->totalBooking = Booking::all()->count();
        $this->totalPending = Booking::where('status','pending')->count();
        $this->totalCompleted = Booking::where('status','completed')->count();
        $this->bookings = Booking::orderBy('created_at', 'desc')->limit(10)->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
