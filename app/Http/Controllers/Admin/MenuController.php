<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        return view('admin.menu');
    }

    public function addMenu(){
        return view('admin.add_menu');
    }

    public function editMenu($id){
        return view('admin.edit_menu', ['id' => $id]);
    }
}
