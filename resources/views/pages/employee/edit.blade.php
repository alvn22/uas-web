@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Karyawan</h1>
    </div>

    <form action="/employee/{{ $employees->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama')
                        is-invalid
                    @enderror" value="{{ old('nama', $employees->nama) }}">
                </div>
                <div class="form-group mb-3">
                    <label for="nik">NIK:</label>
                    <input type="number" name="nik" id="nik" class="form-control @error('nik')
                        is-invalid
                    @enderror" value="{{ old('nik', $employees->nik) }}">
                </div>
                <div class="form-group mb-3">
                    <label for="id_jabatan">Jabatan</label>
                    <select name="id_jabatan" id="id_jabatan" class="form-control">
                        <option value="">-- Pilih jabatan --</option>
                        @foreach ($jabatan as $j)
                            <option value="{{ $j->id }}" @selected(old('id', $j->id))>{{ $j->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="id_divisi">Divisi</label>
                    <select name="id_divisi" id="id_divisi" class="form-control">
                        <option value="">-- Pilih divisi --</option>
                        @foreach ($divisi as $d)
                            <option value="{{ $d->id }}" @selected(old('id', $d->id))>{{ $d->nama_divisi }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="/employee" class="btn btn-outline-secondary">
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