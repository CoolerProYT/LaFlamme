<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function promotion(){
        return view('admin.promotion');
    }
}
