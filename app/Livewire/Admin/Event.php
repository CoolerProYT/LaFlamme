<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Event as EventModel;

class Event extends Component
{
    public $events;

    public function mount(){
        $this->events = EventModel::all();
    }

    public function deleteEvent($id){
        $event = EventModel::find($id);
        Storage::delete('public/event/'.$event->image);
        $event->delete();
        $this->events = EventModel::all();
    }

    public function render()
    {
        return view('livewire.admin.event');
    }
}
