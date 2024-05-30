<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Menu;

class AddMenu extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $price;

    public function uploadMenu(){
        $this->validate([
            'image' => 'image',
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $path = $this->image->store('public/menu');

        $filename = basename($path);

        Menu::create([
            'image' => $filename,
            'name' => $this->name,
            'price' => $this->price
        ]);

        return redirect()->route('admin.menu');
    }

    public function render()
    {
        return view('livewire.admin.add-menu');
    }
}
