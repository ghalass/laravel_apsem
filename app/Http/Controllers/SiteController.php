<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiteRequest;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(CreateSiteRequest $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|min:2'
        // ]);
        $dataToInsert = [
            'name' => $request->name
        ];
        Site::create($dataToInsert);
        return redirect()->route('sites.index');
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
        // dd($id);
        $site = Site::find($id);
        $site->name = $request->name;
        $site->save();
        return redirect()->route('sites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $site = Site::find($id);
        $site->delete();
        return redirect()->route('sites.index');
    }
}
