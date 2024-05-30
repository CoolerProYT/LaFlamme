<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing(){
        $background = Home::where('section','background')->first();
        return view('public.landing', compact('background'));
    }
}
