@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Jabatan</h1>
    </div>

    <form action="/position/{{ $position->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="nama_jabatan">Nama Jabatan:</label>
                    <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control @error('nama_jabatan')
                        is-invalid
                    @enderror" value="{{ old('nama_divisi', $position->nama_jabatan) }}">
                </div>
                <div class="form-group mb-3">
                    <label for="gaji_pokok">Gaji Pokok:</label>
                    <input type="number" name="gaji_pokok" id="gaji_pokok" class="form-control @error('gaji_pokok')
                        is-invalid
                    @enderror" value="{{ old('gaji_pokok', $position->gaji_pokok) }}">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="/position" class="btn btn-outline-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection