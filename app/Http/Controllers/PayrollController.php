<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payroll = Payroll::with('karyawan')->get();
        return view('pages.payroll.index', [
            'payroll' => $payroll
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan = Employee::all();

        return view('pages.payroll.create', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_karyawan' => ['required']
        ]);

        Payroll::create($validated);
        return redirect('/payroll')->with('success', 'Penggajian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payroll = Payroll::with('karyawan')->findOrFail($id);
        return view('pages.payroll.show', [
            'payroll' => $payroll
        ]);
    }
}
