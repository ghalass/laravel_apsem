<?php

namespace App\Livewire\Parc;

use App\Models\Typeparc;
use Livewire\Component;

class CreateParc extends Component
{
    public $typeparcs = [];

    public function render()
    {
        return view('livewire.create-parc');
    }

    public function loadTypeparcs()
    {
        $this->typeparcs = Typeparc::all();
    }
}
