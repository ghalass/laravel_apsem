<?php

namespace App\Http\Controllers;

use App\Models\Parc;
use App\Models\Typeparc;
use Illuminate\Http\Request;

class ParcsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcs = Parc::with('typeparc')->get();
        return view('parc.index', ['parcs' => $parcs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeparcs = Typeparc::all();
        return view('parc.create', ['typeparcs' => $typeparcs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->request);
        $request->validate([
            'name' => 'required|min:2',
            'typeparc_id' => 'required',
        ]);
        $dataToInsert = [
            'name' => $request->name,
            'typeparc_id' => $request->typeparc_id,
        ];
        Parc::create($dataToInsert);

        return redirect()->route('parcs.index');
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
        $parc = Parc::find($id);
        $parc->load('typeparc');
        $typeparcs = Typeparc::all();
        return view('parc.edit', compact('parc', 'typeparcs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {

        $request->validate([
            'name' => 'required|min:2',
            'typeparc_id' => 'required',
        ]);

        // dump($request->request);
        $parc = Parc::find($id);
        $parc->name = $request->name;
        $parc->typeparc_id = $request->typeparc_id;
        $parc->save();

        return redirect()->route('parcs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $parc = Parc::find($id);
        $parc->delete();

        return redirect()->route('parcs.index');
    }
}
