<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $division = Division::all();
        return view('pages.division.index', [
            'division' => $division
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.division.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_divisi' => ['required'],
            'tunjangan' => ['required'],
        ]);

        Division::create($validated);
        return redirect('/division')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $division = Division::findOrFail($id);
        return view('pages.division.edit', [
            'division' => $division
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_divisi' => ['required'],
            'tunjangan' => ['required'],
        ]);

        Division::findOrFail($id)->update($validated);
        return redirect('/division')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $division = Division::findOrFail($id);
        $division->delete();
        return redirect('/division')->with('success', 'Data berhasil dihapus');
    }
}
