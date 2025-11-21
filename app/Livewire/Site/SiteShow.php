<?php

namespace App\Livewire\Site;

use Livewire\Component;

class SiteShow extends Component
{
    public $site;
    public function render()
    {
        return view('livewire.site.site-show');
    }
}
