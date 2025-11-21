<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiteRequest;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sites = Site::paginate(5);
        // $sites = Site::where('id', '>', '10')->get();
        // $sites = Site::orderBy('id', 'desc')->get();
        // $sites = Site::orderBy('id', 'desc')->take(5)->get();
        // $sites = DB::table('sites')->get();

        $sites = Site::all();
        return view('site.index', ['sites' => $sites]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Même style que dans update()
        $validated = $request->validate([
            'name' => [
                'required',
                'min:2',
                Rule::unique('sites', 'name'),
            ],
        ], [
            'name.unique' => 'Nom du site existe déjà',
        ]);

        Site::create([
            'name' => $validated['name'],
        ]);

        return redirect()
            ->route('sites.index')
            ->with(['success' => 'Ajouté avec succès']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Site::find($id);
        return view('site.edit', [
            'site' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        // Validation avec règle unique MAIS en ignorant l'ID actuel
        $validated = $request->validate([
            'name' => [
                'required',
                'min:2',
                Rule::unique('sites')->ignore($id),
            ],
        ], [
            'name.unique' => 'Nom du site existe déjà',
        ]);

        $site = Site::findOrFail($id);
        $site->name = $validated['name'];
        $site->save();

        return redirect()
            ->route('sites.index')
            ->with(['success' => 'Modifié avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $site = Site::find($id);

        if (!$site) {
            return redirect()
                ->back()
                ->with(['error' => "Le site demandé n'existe pas."]);
        }

        $site->delete();

        return redirect()
            ->back()
            ->with(['success' => 'Supprimé avec succès']);
    }
}
