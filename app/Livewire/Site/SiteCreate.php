<?php

namespace App\Livewire\Site;

use App\Models\Site;
use Livewire\Component;

class SiteCreate extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.site.site-create');
    }

    public function submit()
    {
        sleep(1);
        $this->validate([
            'name' => 'required|min:2'
        ]);
        Site::create([
            'name' => $this->name
        ]);
        // session()->flash('success', 'Site ajouté avec succès');
        // return redirect()->route('sites.index');
        $this->resetForm();
        // return redirect()
        //     ->route('sites.index')
        //     ->with(['success' => 'Site ajouté avec succès']);
    }

    public function resetForm()
    {
        $this->name = "";
    }
}
