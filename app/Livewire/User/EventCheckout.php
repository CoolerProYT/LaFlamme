<?php

namespace App\Livewire\User;

use App\Models\Booking;
use App\Models\Event;
use Livewire\Component;
use Stripe\StripeClient;
use Pusher\Pusher;

class EventCheckout extends Component
{
    public $id;
    public $payment_intent_id;
    public $client_secret;
    public $booking;
    public $event;

    public function mount(){
        $booking = Booking::where('booking_id', $this->id)->first();
        $this->booking = $booking;
        $this->event = Event::find($booking->event_id);

        $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));

        $total = $booking->total_payment * 100;

        $intent = $stripe->paymentIntents->create([
            'amount' => $total,
            'currency' => 'myr',
            'automatic_payment_methods' => ['enabled' => true]
        ]);

        $this->payment_intent_id = $intent->id;
        $this->client_secret = $intent->client_secret;
    }

    public function cancelBooking(){
        $this->booking->delete();
        $pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), array('cluster' => env('PUSHER_APP_CLUSTER')));

        $pusher->trigger('booking', 'booking-placed', array('message' => 'update'));
        return redirect()->route('landing');
    }

    public function render()
    {
        return view('livewire.user.event-checkout');
    }
}
