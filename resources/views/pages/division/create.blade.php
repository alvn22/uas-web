@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Divisi</h1>
    </div>

    <form action="/division" method="post">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="nama_divisi">Nama Divisi:</label>
                    <input type="text" name="nama_divisi" id="nama_divisi" class="form-control @error('nama_divisi')
                        is-invalid
                    @enderror" value="{{ old('nama_divisi') }}">
                </div>
                <div class="form-group mb-3">
                    <label for="tunjangan">Tunjangan:</label>
                    <input type="number" name="tunjangan" id="tunjangan" class="form-control @error('tunjangan')
                        is-invalid
                    @enderror" value="{{ old('tunjangan') }}">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="/division" class="btn btn-outline-secondary">
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