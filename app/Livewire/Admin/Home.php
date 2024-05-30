<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Home as HomeModel;

class Home extends Component
{
    use WithFileUploads;

    public $background;
    public $background_file;
    public $edit_background = false;

    public $about;
    public $about_content;
    public $edit_about = false;

    public $galleries;
    public $gallery_file;
    public $add_gallery = false;

    public $floor_plan;
    public $floor_plan_file;
    public $change = false;

    public function mount(){
        $this->background = HomeModel::where('section','background')->first();
        $this->about = HomeModel::where('section','about')->first();
        $this->about_content = $this->about ? $this->about->content : '';
        $this->galleries = HomeModel::where('section','gallery')->get();
        $this->floor_plan = HomeModel::where('section','floor')->first();
    }

    public function updateBackgroundFlag($flag){
        $this->edit_background = $flag;

    }

    public function uploadBackground(){
        $this->validate([
            'background_file' => 'mimes:jpeg,jpg,png,mp4|required'
        ]);

        $extension = $this->background_file->extension();

        if($this->background){
            Storage::delete('public/background/'.$this->background->content);
        }

        $path = $this->background_file->store('public/background');

        $filename = basename($path);
        $url = Storage::url($path);
        $content_type = $extension == 'mp4' ? 'video' : 'image';

        if($this->background){
            $this->background->update(['content' => $filename, 'content-type' => $content_type]);
        }
        else{
            HomeModel::create(['section' => 'background', 'content' => $filename, 'content-type' => $content_type]);
        }

        $this->background = HomeModel::where('section','background')->first();
        $this->edit_background = false;
        $this->background_file = null;
    }

    public function updateAboutFlag($flag){
        $this->edit_about = $flag;
    }

    public function updateAbout(){
        $this->validate([
            'about_content' => 'required'
        ]);

        if($this->about){
            $this->about->update(['content' => $this->about_content]);
        }
        else{
            HomeModel::create(['section' => 'about', 'content' => $this->about_content, 'content-type' => 'text']);
        }

        $this->about = HomeModel::where('section','about')->first();
        $this->edit_about = false;
    }

    public function updateGalleryFlag($flag){
        $this->add_gallery = $flag;
    }

    public function uploadGallery(){
        $this->validate([
            'gallery_file' => 'mimes:jpeg,jpg,png|required'
        ]);

        $path = $this->gallery_file->store('public/gallery');

        $filename = basename($path);
        $url = Storage::url($path);
        $content_type = 'image';

        HomeModel::create(['section' => 'gallery', 'content' => $filename, 'content-type' => $content_type]);

        $this->galleries = HomeModel::where('section','gallery')->get();
        $this->add_gallery = false;
        $this->gallery_file = null;
    }

    public function deleteGallery($id){
        $gallery = HomeModel::find($id);
        Storage::delete('public/gallery/'.$gallery->content);

        HomeModel::find($id)->delete();
        $this->galleries = HomeModel::where('section','gallery')->get();
    }

    public function updateFloorFlag($flag){
        $this->change = $flag;

    }

    public function changeFloor(){
        $this->validate([
            'floor_plan_file' => 'mimes:jpeg,jpg,png|required'
        ]);

        if($this->floor_plan){
            Storage::delete('public/floor/'.$this->floor_plan->content);
        }

        $path = $this->floor_plan_file->store('public/floor');

        $filename = basename($path);
        $url = Storage::url($path);
        $content_type = 'image';

        if($this->floor_plan){
            $this->floor_plan->update(['content' => $filename, 'content-type' => $content_type]);
        }
        else{
            HomeModel::create(['section' => 'floor', 'content' => $filename, 'content-type' => $content_type]);
        }

        $this->floor_plan = HomeModel::where('section','floor')->first();
        $this->change = false;
        $this->floor_plan_file = null;
    }

    public function render()
    {
        return view('livewire.admin.home');
    }
}
