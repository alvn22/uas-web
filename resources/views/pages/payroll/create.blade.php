@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Penggajian</h1>
    </div>

    <form action="/payroll" method="post">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="id_karyawan">Nama Lengkap:</label>
                    <select name="id_karyawan" id="id_karyawan" class="form-control">
                        <option value="">-- Pilih pegawai --</option>
                        @foreach ($karyawan as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="/payroll" class="btn btn-outline-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection