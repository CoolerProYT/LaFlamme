<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class EventController extends Controller
{
    public function event($id){
        return view('user.event_detail', ['id' => $id]);
    }

    public function bookEvent($id){
        if(!Auth::guard('web')->check()){
            return redirect()->route('user.login',['returnUrl' => route('event_book',['id' => $id])]);
        }

        return view('user.event_book', ['id' => $id]);
    }

    public function checkoutEvent($id){
        if(!Booking::where('booking_id', $id)->exists()){
            return redirect()->route('landing');
        }

        return view('user.event_checkout', ['id' => $id]);
    }

    public function return(Request $request){
        if($request->query('redirect_status') != 'succeeded'){
            $booking = Booking::where('booking_id', $request->query('booking_id'))->first();
            $booking->delete();
        }

        $pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), array('cluster' => env('PUSHER_APP_CLUSTER')));
        $pusher->trigger('booking', 'booking-placed', array('message' => 'update'));

        return redirect()->route('user.booking');
    }
}
