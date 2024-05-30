<?php

namespace App\Livewire\Public;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class Events extends Component
{
    public $events;

    public function mount(){
        $today = Carbon::today()->toDateString();
        $this->events = Event::where('date', '>=', $today)->orderBy('date')->limit(3)->get();
    }

    public function render()
    {
        return view('livewire.public.events');
    }
}
