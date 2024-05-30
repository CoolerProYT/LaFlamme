<?php

namespace App\Livewire\User;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Booking as BookingModel;

class Booking extends Component
{
    public $flag = 'pending';
    public $bookings;
    public $qrCode = '';
    public $qr_booking;
    public $qr_event;

    public function mount(){
        $this->getBooking();
    }

    public function getBooking(){
        $this->bookings = BookingModel::where('status',$this->flag)->where('user_id',Auth::guard('web')->user()->id)->get();
    }

    public function updateFlag($flag){
        $this->flag = $flag;
        $this->getBooking();
    }

    public function showQrCode($id){
        $this->qrCode = BookingModel::find($id)->qr_code;
        $this->qr_booking = BookingModel::find($id);
        $this->qr_event = Event::find($this->qr_booking->event_id);
    }

    public function closeQrCode(){
        $this->qrCode = '';
        unset($this->qr_booking);
        unset($this->qr_event);
    }

    public function render()
    {
        return view('livewire.user.booking');
    }
}
