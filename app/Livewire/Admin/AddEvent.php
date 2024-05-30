<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;

class AddEvent extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $description;
    public $start = "00:00:00";
    public $end = "00:00:00";
    public $date;
    public $vip_price;
    public $sdj_price;
    public $vvip_price;
    public $svip_price;
    public $svvip_price;
    public $s_price;

    public function uploadEvent(){
        $this->validate([
            'image' => 'image',
            'name' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'date' => 'required|unique:events,date',
            'vip_price' => 'required',
            'sdj_price' => 'required',
            'vvip_price' => 'required',
            'svip_price' => 'required',
            'svvip_price' => 'required',
            's_price' => 'required',
        ]);

        $path = $this->image->store('public/event');

        $filename = basename($path);

        Event::create([
            'image' => $filename,
            'name' => $this->name,
            'description' => $this->description,
            'start' => $this->start,
            'end' => $this->end,
            'date' => $this->date,
            'vip_price' => $this->vip_price,
            'sdj_price' => $this->sdj_price,
            'vvip_price' => $this->vvip_price,
            'svip_price' => $this->svip_price,
            'svvip_price' => $this->svvip_price,
            's_price' => $this->s_price
        ]);

        return redirect()->route('admin.event');
    }

    public function render()
    {
        return view('livewire.admin.add-event');
    }
}
