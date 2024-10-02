@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#">Halaman Informasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('informasi.index') }}">Daftar Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('informasi.create') }}">Tambah Informasi</a>
                </li>
                <!-- Tambahkan item menu lain di sini jika perlu -->
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="mb-4">Daftar Informasi</h1>
        
        <!-- Tombol Tambah Data -->
        <div class="mb-3">
            <a href="{{ route('informasi.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Info</th>
                            <th>Judul Info</th>
                            <th>Isi Info</th>
                            <th>Tanggal Posting</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informasi as $item)  <!-- Mengganti variabel dari $agenda menjadi $item -->
                            <tr>
                                <td>{{ $item->kd_info }}</td> <!-- Menggunakan $item untuk menampilkan data -->
                                <td>{{ $item->judul_info }}</td>
                                <td>{{ $item->isi_info }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tgl_post_info)->format('d-m-Y') }}</td> <!-- Menggunakan tgl_post_info -->
                                <td class="{{ $item->status_info ? 'text-success' : 'text-danger' }}">
                                    {{ $item->status_info ? 'Aktif' : 'Tidak Aktif' }}
                                </td>
                                <td>
                                    <a href="{{ route('informasi.edit', $item->kd_info) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('informasi.destroy', $item->kd_info) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
