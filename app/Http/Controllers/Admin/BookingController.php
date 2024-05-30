<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookingScan($id){
        if(!Auth::guard('admin')->check()){
            return redirect()->route('admin.login',['returnUrl' => route('admin.booking_scan',['id' => $id])]);
        }

        return view('admin.booking_scan', ['id' => $id]);
    }

    public function booking(){
        return view('admin.booking');
    }
}
