<?php

namespace App\Livewire\Site;

use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class Sites extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    #[Url]
    public $search;
    public $name;
    public function render()
    {
        $sites = Site::where('name', "LIKE", "%{$this->search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('livewire.site.sites', ['sites' => $sites]);
        // return view('livewire.sites');
    }


    // public function submit()
    // {
    //     sleep(1);
    //     $this->validate([
    //         'name' => 'required|min:2'
    //     ]);
    //     Site::create([
    //         'name' => $this->name
    //     ]);
    //     // session()->flash('success', 'Site ajouté avec succès');
    //     // return redirect()->route('sites.index');
    //     $this->resetForm();
    //     // session()->flash('success', 'Ajouté avec succès');
    //     // return redirect()
    //     //     ->route('sites.index')
    //     //     ->with(['success' => 'Site ajouté avec succès']);
    // }

    // public function resetForm()
    // {
    //     $this->name = "";
    // }


    function delete($id)
    {
        $site = Site::find($id);

        if (!$site) {
            // session()->flash('error', "Le site demandé n'existe pas");
            return redirect()
                ->route('sites.index')
                ->with(['error' => "Le site demandé n'existe pas."]);
        }

        $site->delete();

        // session()->flash('success', 'Supprimé avec succès');

        // return redirect()
        //     ->route('sites.index')
        //     ->with(['success' => 'Supprimé avec succès']);
    }
}
