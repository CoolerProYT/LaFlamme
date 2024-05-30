<?php

namespace App\Livewire\User;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EventBook extends Component
{
    public $id;
    public $event;
    public $bookedSeats = [];

    public $name;
    public $pax = 1;

    public $sdj_price;
    public $vip_price;
    public $vvip_price;
    public $svip_price;
    public $svvip_price;
    public $s_price;

    public $sdj1;
    public $sdj2;
    public $sdj3;
    public $sdj5;
    public $sdj6;
    public $sdj7;
    public $sdj8;

    public $vip1;
    public $vip2;
    public $vip3;
    public $vip5;
    public $vip6;
    public $vip7;
    public $vip8;
    public $vip9;
    public $vip10;
    public $vip12;
    public $vip13;
    public $vip15;
    public $vip16;
    public $vip17;

    public $vvip1;
    public $vvip2;
    public $vvip3;
    public $vvip5;
    public $vvip6;
    public $vvip7;

    public $svip1;
    public $svip2;
    public $svip3;
    public $svip5;
    public $svip6;
    public $svip7;
    public $svip8;
    public $svip9;

    public $svvip1;
    public $svvip2;

    public $s1;
    public $s2;
    public $s3;
    public $s5;

    public function mount(){
        $this->event = Event::find($this->id);

        $this->sdj_price = $this->event->sdj_price;
        $this->vip_price = $this->event->vip_price;
        $this->vvip_price = $this->event->vvip_price;
        $this->svip_price = $this->event->svip_price;
        $this->svvip_price = $this->event->svvip_price;
        $this->s_price = $this->event->s_price;

        $booking = Booking::where('event_id', $this->id)->get('table');

        foreach($booking as $item){
            $table = explode(',', $item->table);
            foreach($table as $seat){
                $this->bookedSeats[] = $seat;
            }
        }
    }

    public function updateTable(){
        $booking = Booking::where('event_id', $this->id)->get('table');
        unset($this->bookedSeats);
        $this->bookedSeats = [];

        foreach($booking as $item){
            $table = explode(',', $item->table);
            foreach($table as $seat){
                $this->bookedSeats[] = $seat;
            }
        }

        $this->sdj1 = false;
        $this->sdj2 = false;
        $this->sdj3 = false;
        $this->sdj5 = false;
        $this->sdj6 = false;
        $this->sdj7 = false;
        $this->sdj8 = false;

        $this->vip1 = false;
        $this->vip2 = false;
        $this->vip3 = false;
        $this->vip5 = false;
        $this->vip6 = false;
        $this->vip7 = false;
        $this->vip8 = false;
        $this->vip9 = false;
        $this->vip10 = false;
        $this->vip12 = false;
        $this->vip13 = false;
        $this->vip15 = false;
        $this->vip16 = false;
        $this->vip17 = false;

        $this->vvip1 = false;
        $this->vvip2 = false;
        $this->vvip3 = false;
        $this->vvip5 = false;
        $this->vvip6 = false;
        $this->vvip7 = false;

        $this->svip1 = false;
        $this->svip2 = false;
        $this->svip3 = false;
        $this->svip5 = false;
        $this->svip6 = false;
        $this->svip7 = false;
        $this->svip8 = false;
        $this->svip9 = false;

        $this->svvip1 = false;
        $this->svvip2 = false;

        $this->s1 = false;
        $this->s2 = false;
        $this->s3 = false;
        $this->s5 = false;
    }

    public function checkout(){
        $selectedSeats = [];

        if ($this->sdj1) $selectedSeats[] = 'SDJ1';
        if ($this->sdj2) $selectedSeats[] = 'SDJ2';
        if ($this->sdj3) $selectedSeats[] = 'SDJ3';
        if ($this->sdj5) $selectedSeats[] = 'SDJ5';
        if ($this->sdj6) $selectedSeats[] = 'SDJ6';
        if ($this->sdj7) $selectedSeats[] = 'SDJ7';
        if ($this->sdj8) $selectedSeats[] = 'SDJ8';

        if ($this->vip1) $selectedSeats[] = 'VIP1';
        if ($this->vip2) $selectedSeats[] = 'VIP2';
        if ($this->vip3) $selectedSeats[] = 'VIP3';
        if ($this->vip5) $selectedSeats[] = 'VIP5';
        if ($this->vip6) $selectedSeats[] = 'VIP6';
        if ($this->vip7) $selectedSeats[] = 'VIP7';
        if ($this->vip8) $selectedSeats[] = 'VIP8';
        if ($this->vip9) $selectedSeats[] = 'VIP9';
        if ($this->vip10) $selectedSeats[] = 'VIP10';
        if ($this->vip12) $selectedSeats[] = 'VIP12';
        if ($this->vip13) $selectedSeats[] = 'VIP13';
        if ($this->vip15) $selectedSeats[] = 'VIP15';
        if ($this->vip16) $selectedSeats[] = 'VIP16';
        if ($this->vip17) $selectedSeats[] = 'VIP17';

        if ($this->vvip1) $selectedSeats[] = 'VVIP1';
        if ($this->vvip2) $selectedSeats[] = 'VVIP2';
        if ($this->vvip3) $selectedSeats[] = 'VVIP3';
        if ($this->vvip5) $selectedSeats[] = 'VVIP5';
        if ($this->vvip6) $selectedSeats[] = 'VVIP6';
        if ($this->vvip7) $selectedSeats[] = 'VVIP7';

        if ($this->svip1) $selectedSeats[] = 'SVIP1';
        if ($this->svip2) $selectedSeats[] = 'SVIP2';
        if ($this->svip3) $selectedSeats[] = 'SVIP3';
        if ($this->svip5) $selectedSeats[] = 'SVIP5';
        if ($this->svip6) $selectedSeats[] = 'SVIP6';
        if ($this->svip7) $selectedSeats[] = 'SVIP7';
        if ($this->svip8) $selectedSeats[] = 'SVIP8';
        if ($this->svip9) $selectedSeats[] = 'SVIP9';

        if ($this->svvip1) $selectedSeats[] = 'SVVIP1';
        if ($this->svvip2) $selectedSeats[] = 'SVVIP2';

        if ($this->s1) $selectedSeats[] = 'S1';
        if ($this->s2) $selectedSeats[] = 'S2';
        if ($this->s3) $selectedSeats[] = 'S3';
        if ($this->s5) $selectedSeats[] = 'S5';

        if(count($selectedSeats) == 0){
            return $this->addError('table', 'Please select at least one table.');
        }

        $this->validate([
            'name' => 'required',
            'pax' => 'required|numeric|min:1'
        ]);

        $total_price = 0;

        foreach($selectedSeats as $selectedSeat){
            switch($selectedSeat){
                case 'SDJ1':
                case 'SDJ2':
                case 'SDJ3':
                case 'SDJ5':
                case 'SDJ6':
                case 'SDJ7':
                case 'SDJ8':
                    $total_price += $this->sdj_price;
                    break;
                case 'VIP1':
                case 'VIP2':
                case 'VIP3':
                case 'VIP5':
                case 'VIP6':
                case 'VIP7':
                case 'VIP8':
                case 'VIP9':
                case 'VIP10':
                case 'VIP12':
                case 'VIP13':
                case 'VIP15':
                case 'VIP16':
                case 'VIP17':
                    $total_price += $this->vip_price;
                    break;
                case 'VVIP1':
                case 'VVIP2':
                case 'VVIP3':
                case 'VVIP5':
                case 'VVIP6':
                case 'VVIP7':
                    $total_price += $this->vvip_price;
                    break;
                case 'SVIP1':
                case 'SVIP2':
                case 'SVIP3':
                case 'SVIP5':
                case 'SVIP6':
                case 'SVIP7':
                case 'SVIP8':
                case 'SVIP9':
                    $total_price += $this->svip_price;
                    break;
                case 'SVVIP1':
                case 'SVVIP2':
                    $total_price += $this->svvip_price;
                    break;
                case 'S1':
                case 'S2':
                case 'S3':
                case 'S5':
                    $total_price += $this->s_price;
                    break;
            }
        }

        do{
            $booking_id = "LA" . random_int(100000, 999999);
        }while(Booking::where('booking_id', $booking_id)->exists());

        $url = urlencode(route('admin.booking_scan', ['id' => $booking_id]));

        Booking::create([
            'event_id' => $this->id,
            'user_id' => Auth::guard('web')->user()->id,
            'booking_id' => $booking_id,
            'table' => implode(',', $selectedSeats),
            'total_payment' => $total_price / 2,
            'qr_code' => "https://qrcode.tec-it.com/API/QRCode?data=$url",
            'name' => $this->name,
            'pax' => $this->pax
        ]);

        return redirect()->route('event_checkout', ['id' => $booking_id]);
    }

    public function render()
    {
        return view('livewire.user.event-book');
    }
}
