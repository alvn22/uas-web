@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Penggajian</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="form-group mb-3">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" id="nama" readonly class="form-control @error('nama')
                    is-invalid
                @enderror" value="{{ $payroll->karyawan->nama }}">
            </div>
            <div class="form-group mb-3">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" readonly class="form-control @error('jabatan')
                    is-invalid
                @enderror" value="{{ $payroll->karyawan->jabatan->nama_jabatan }}">
            </div>
            <div class="form-group mb-3">
                <label for="divisi">Divisi:</label>
                <input type="text" name="divisi" id="divisi" readonly class="form-control @error('divisi')
                    is-invalid
                @enderror" value="{{ $payroll->karyawan->divisi->nama_divisi }}">
            </div>
            <div class="form-group mb-3">
                <label for="gaji_pokok">Gaji Pokok:</label>
                <input type="text" name="gaji_pokok" id="gaji_pokok" readonly class="form-control @error('gaji_pokok')
                    is-invalid
                @enderror" value="Rp. {{ number_format($payroll->karyawan->jabatan->gaji_pokok, 0, ',', '.') }}">
            </div>
            <div class="form-group mb-3">
                <label for="tunjangan">Tunjangan:</label>
                <input type="text" name="tunjangan" id="tunjangan" readonly class="form-control @error('tunjangan')
                    is-invalid
                @enderror" value="Rp. {{ number_format($payroll->karyawan->divisi->tunjangan, 0, ',', '.') }}">
            </div>
            <div class="form-group mb-3">
                <label for="total_gaji">Total Gaji:</label>
                <input type="text" name="total_gaji" id="total_gaji" readonly class="form-control @error('total_gaji')
                    is-invalid
                @enderror" value="Rp. {{ number_format($payroll->karyawan->total_gaji, 0, ',', '.') }}">
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <a href="/payroll" class="btn btn-outline-secondary">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection