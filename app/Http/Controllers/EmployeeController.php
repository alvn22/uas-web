<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with(['jabatan', 'divisi'])->get();
        return view('pages.employee.index', [
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan = Position::all();
        $divisi = Division::all();

        return view('pages.employee.create', [
            'jabatan' => $jabatan,
            'divisi' => $divisi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'nik' => ['required'],
            'id_jabatan' => ['required'],
            'id_divisi' => ['required'],
        ]);

        Employee::create($validated);
        return redirect('/employee')->with('success', 'Data berhasil ditambahkan');
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
        $employees = Employee::findOrFail($id);
        $jabatan = Position::all();
        $divisi = Division::all();

        return view('pages.employee.edit', [
            'employees' => $employees,
            'divisi' => $divisi,
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'nik' => ['required'],
            'id_jabatan' => ['required'],
            'id_divisi' => ['required'],
        ]);

        Employee::findOrFail($id)->update($validated);
        return redirect('/employee')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('/employee')->with('success', 'Data berhasil dihapus');
    }
}
