<?php

namespace App\Livewire\Public;

use App\Models\Home;
use Livewire\Component;

class Promotion extends Component
{
    public $image;
    public $description;
    public $enabled;
    public $flag = true;

    public function mount(){
        $this->image = Home::where(['section' => 'promotion', 'content-type' => 'image'])->first()->content;
        $this->description = Home::where(['section' => 'promotion', 'content-type' => 'description'])->first()->content;
        $this->enabled = boolval(Home::where(['section' => 'promotion', 'content-type' => 'is_active'])->first()->content);
    }

    public function updateFlag($flag){
        $this->flag = $flag;
    }

    public function render()
    {
        return view('livewire.public.promotion');
    }
}
