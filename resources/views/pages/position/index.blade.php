@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Jabatan</h1>
        <a href="position/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session()->get('success') }}",
                icon: "success"
            });
        </script>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($position->isEmpty())
                            <tbody>
                                <td colspan="4">
                                    <p class="mt-3 text-center">Tidak Ada Data</p>
                                </td>
                            </tbody>
                        @endif
                        @foreach ($position as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_jabatan }}</td>
                                <td>Rp. {{ number_format($item->gaji_pokok, 0, ',', '.') }}</td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap: 10px">
                                        <a href="/position/{{ $item->id }}" class="d-inline-block btn btn-sm btn-warning">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $item->id }}">
                                            <i class="fas fa-eraser"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('pages.position.confirm-delete')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection