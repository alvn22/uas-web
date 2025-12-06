@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penggajian</h1>
        <a href="payroll/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                            <th>Jabatan</th>
                            <th>Divisi</th>
                            <th>Waktu</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($payroll->isEmpty())
                            <tbody>
                                <td colspan="7">
                                    <p class="mt-3 text-center">Tidak Ada Data</p>
                                </td>
                            </tbody>
                        @endif
                        @foreach ($payroll as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->karyawan->nama }}</td>
                                <td>{{ $item->karyawan->jabatan->nama_jabatan }}</td>
                                <td>{{ $item->karyawan->divisi->nama_divisi }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>Rp. {{ number_format($item->karyawan->total_gaji, 0, ',', '.') }}</td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap: 10px">
                                        <a href="/payroll/{{ $item->id }}" class="d-inline-block btn btn-sm btn-info">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection