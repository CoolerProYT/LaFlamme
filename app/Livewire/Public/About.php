<?php

namespace App\Livewire\Public;

use App\Models\Home;
use Livewire\Component;

class About extends Component
{
    public $about;

    public function mount(){
        $this->about = Home::where('section','about')->first()->content ?? '';
    }
    public function render()
    {
        return view('livewire.public.about');
    }
}
