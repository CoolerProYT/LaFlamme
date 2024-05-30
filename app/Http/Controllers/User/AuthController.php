<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $returnUrl = $request->get('returnUrl') ?? route('landing');
        if(Auth::guard('web')->check()){
            return redirect()->route('landing');
        }

        return view('user.login',compact('returnUrl'));
    }

    public function register(){
        if(Auth::guard('web')->check()){
            return redirect()->route('landing');
        }

        return view('user.register');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('landing');
    }
}
