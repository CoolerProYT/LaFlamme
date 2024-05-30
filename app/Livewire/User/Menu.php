<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Menu as MenuModel;

class Menu extends Component
{
    public $menus;

    public function mount(){
        $this->menus = MenuModel::all();
    }

    public function render()
    {
        return view('livewire.user.menu');
    }
}
