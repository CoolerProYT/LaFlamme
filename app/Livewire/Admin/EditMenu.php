<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Menu;
use Livewire\WithFileUploads;

class EditMenu extends Component
{
    use WithFileUploads;

    public $id;

    public $image;
    public $name;
    public $price;

    public $newImage;

    public function mount(){
        $menu = Menu::find($this->id);
        $this->image = $menu->image;
        $this->name = $menu->name;
        $this->price = $menu->price;
    }

    public function updateMenu(){
        $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $menu = Menu::find($this->id);

        if($this->newImage){
            $this->validate([
                'newImage' => 'image',
            ]);

            $path = $this->newImage->store('public/menu');

            $filename = basename($path);
            $menu->image = $filename;

            Storage::delete('public/menu/'.$this->image);
        }

        $menu->name = $this->name;
        $menu->price = $this->price;
        $menu->save();

        return redirect()->route('admin.menu');
    }

    public function render()
    {
        return view('livewire.admin.edit-menu');
    }
}
