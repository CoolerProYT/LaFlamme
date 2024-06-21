<?php

namespace App\Livewire\User;

use App\Models\Event;
use App\Models\Home;
use Livewire\Component;

class EventDetail extends Component
{
    public $id;
    public $event;
    public function mount(){
        $this->event = Event::find($this->id);
    }

    public function render()
    {
        return view('livewire.user.event-detail');
    }
}
