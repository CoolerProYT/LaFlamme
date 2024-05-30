<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;

class EditEvent extends Component
{
    use WithFileUploads;

    public $id;

    public $image;
    public $name;
    public $description;
    public $start;
    public $end;
    public $date;
    public $vip_price;
    public $sdj_price;
    public $vvip_price;
    public $svip_price;
    public $svvip_price;
    public $s_price;

    public $newImage;

    public function mount(){
        $event = Event::find($this->id);

        $this->image = $event->image;
        $this->name = $event->name;
        $this->description = $event->description;
        $this->start = $event->start;
        $this->end = $event->end;
        $this->date = $event->date;
        $this->vip_price = $event->vip_price;
        $this->sdj_price = $event->sdj_price;
        $this->vvip_price = $event->vvip_price;
        $this->svip_price = $event->svip_price;
        $this->svvip_price = $event->svvip_price;
        $this->s_price = $event->s_price;
    }

    public function updateEvent(){
        if($this->newImage){
            $this->validate([
                'newImage' => 'image'
            ]);
        }

        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'date' => 'required|unique:events,date,'.$this->id,
            'vip_price' => 'required',
            'sdj_price' => 'required',
            'vvip_price' => 'required',
            'svip_price' => 'required',
            'svvip_price' => 'required',
            's_price' => 'required',
        ]);

        $event = Event::find($this->id);

        if($this->newImage){
            Storage::delete('public/event/'.$event->image);
            $path = $this->image->store('public/event');
            $filename = basename($path);
            $event->image = $filename;
        }

        $event->name = $this->name;
        $event->description = $this->description;
        $event->start = $this->start;
        $event->end = $this->end;
        $event->date = $this->date;
        $event->vip_price = $this->vip_price;
        $event->sdj_price = $this->sdj_price;
        $event->vvip_price = $this->vvip_price;
        $event->svip_price = $this->svip_price;
        $event->svvip_price = $this->svvip_price;
        $event->s_price = $this->s_price;

        $event->save();

        return redirect()->route('admin.event');
    }

    public function render()
    {
        return view('livewire.admin.edit-event');
    }
}
