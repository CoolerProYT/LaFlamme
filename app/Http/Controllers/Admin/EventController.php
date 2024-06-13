<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(){
        return view('admin.event');
    }

    public function addEvent(){
        return view('admin.add_event');
    }

    public function editEvent($id){
        $event = Event::find($id);
        if (!$event) {
            return redirect()->route('admin.event');
        }


        return view('admin.edit_event', ['id' => $id]);
    }
}
