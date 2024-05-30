<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return redirect()->route('admin.login');
    }

    public function login(Request $request){
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }

        $returnUrl = $request->query('returnUrl') ?? route('admin.dashboard');
        return view('admin.login', compact('returnUrl'));
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
