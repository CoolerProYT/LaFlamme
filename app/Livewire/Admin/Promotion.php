<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class Promotion extends Component
{
    use WithFileUploads;

    public $image;
    public $isActive;
    public $description;

    public $image_file;
    public $new_desc;

    public $edit_image = false;
    public $edit_desc = false;

    public function mount(){
        if(!Home::where(['section' => 'promotion', 'content-type' => 'image'])->exists()){
            Home::create([
                'section' => 'promotion',
                'content-type' => 'image',
                'content' => 'nothing'
            ]);
        }
        else{
            $this->image = Home::where(['section' => 'promotion', 'content-type' => 'image'])->first()->content;
        }

        if(!Home::where(['section' => 'promotion', 'content-type' => 'description'])->exists()){
            Home::create([
                'section' => 'promotion',
                'content-type' => 'description',
                'content' => ''
            ]);
        }
        else{
            $this->description = Home::where(['section' => 'promotion', 'content-type' => 'description'])->first()->content;
        }

        if(!Home::where(['section' => 'promotion', 'content-type' => 'is_active'])->exists()){
            Home::create([
                'section' => 'promotion',
                'content-type' => 'is_active',
                'content' => 'false'
            ]);
        }
        else{
            $this->isActive = boolval(Home::where(['section' => 'promotion', 'content-type' => 'is_active'])->first()->content);
        }
    }

    public function updateImageFlag($flag){
        $this->edit_image = $flag;
    }

    public function updateImage(){
        $this->validate([
            'image_file' => 'image',
        ]);

        if($this->image != 'nothing'){
            Storage::delete('public/promotion/'.$this->image);
        }

        $path = $this->image_file->store('public/promotion');

        $filename = basename($path);
        $url = Storage::url($path);

        Home::where(['section' => 'promotion', 'content-type' => 'image'])->update(['content' => $filename]);
        $this->image = $filename;
        $this->edit_image = false;
    }

    public function updateDescFlag($flag){
        $this->edit_desc = $flag;
    }

    public function updateDesc(){
        Home::where(['section' => 'promotion', 'content-type' => 'description'])->update(['content' => $this->new_desc]);
        $this->description = $this->new_desc;
        $this->edit_desc = false;
    }

    public function toggleActive(){
        Home::where(['section' => 'promotion', 'content-type' => 'is_active'])->update(['content' => $this->isActive ? 'true' : '']);
    }

    public function render()
    {
        return view('livewire.admin.promotion');
    }
}
