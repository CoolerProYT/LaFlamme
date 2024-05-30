<?php

namespace App\Livewire\Public;

use App\Models\Home;
use Livewire\Component;

class Gallery extends Component
{
    public $galleries;
    public $chunk;

    public function mount(){
        $this->galleries = Home::where('section','gallery')->get();
        $this->chunk = ceil($this->galleries->count() / 3);
    }

    public function render()
    {
        return view('livewire.public.gallery');
    }
}
