<?php

namespace App\Http\Controllers;

use App\Models\Typeparc;
use Illuminate\Http\Request;

class TypeparcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeparcs = Typeparc::all();
        return view('typeparc.index', ['typeparcs' => $typeparcs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('typeparc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2'
        ]);
        $dataToInsert = [
            'name' => $request->name
        ];
        Typeparc::create($dataToInsert);
        return redirect()->route('typeparcs.index');
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
        $data = Typeparc::find($id);
        return view('typeparc.edit', [
            'typeparc' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:2'
        ]);
        $typeparc = Typeparc::find($id);
        $typeparc->name = $request->name;
        $typeparc->save();
        return redirect()->route('typeparcs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $typeparc = Typeparc::find($id);
        $typeparc->delete();
        return redirect()->route('typeparcs.index');
    }
}
