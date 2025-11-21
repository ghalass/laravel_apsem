<?php

namespace App\Livewire\Parc;

use App\Models\Parc;
use Livewire\Component;

class Parcs extends Component
{
    public function render()
    {
        $parcs = Parc::with('typeparc')->get();
        return view('livewire.parcs', ['parcs' => $parcs]);
    }
}
