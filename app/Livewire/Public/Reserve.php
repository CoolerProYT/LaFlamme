<?php

namespace App\Livewire\Public;

use App\Models\Home;
use Livewire\Component;

class Reserve extends Component
{
    public $floor_plan;

    public function mount(){
        $this->floor_plan = Home::where('section','floor')->first();
    }

    public function render()
    {
        return view('livewire.public.reserve');
    }
}
