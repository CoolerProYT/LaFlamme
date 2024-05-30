<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Menu as MenuModel;

class Menu extends Component
{
    public $menus;

    public function mount(){
        $this->menus = MenuModel::all();
    }

    public function deleteMenu($id){
        $menu = MenuModel::find($id);
        $menu->delete();
        $this->menus = MenuModel::all();
    }

    public function render()
    {
        return view('livewire.admin.menu');
    }
}
