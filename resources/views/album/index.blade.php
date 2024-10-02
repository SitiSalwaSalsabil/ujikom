@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#">Halaman Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('album.index') }}">Daftar Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('album.create') }}">Tambah Album</a>
                </li>
                <!-- Tambahkan item menu lain di sini jika perlu -->
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="mb-4">Daftar Album</h1>
        
        <!-- Tombol Tambah Data -->
        <div class="mb-3">
            <a href="{{ route('album.create') }}" class="btn btn-primary">Tambah Album</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Album</th>
                            <th>Judul Album</th>
                            <th>Isi Album</th>
                            <th>ID Pengguna</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($album as $item)  <!-- Mengganti variabel dari $informasi menjadi $item -->
                            <tr>
                                <td>{{ $item->kd_album }}</td> <!-- Menggunakan $item untuk menampilkan data -->
                                <td>{{ $item->judul_album }}</td>
                                <td>{{ $item->isi_album }}</td>
                                <td>{{ $item->user_id }}</td> <!-- Menampilkan user_id -->
                                <td class="{{ $item->status_album ? 'text-success' : 'text-danger' }}">
                                    {{ $item->status_album ? 'Aktif' : 'Tidak Aktif' }}
                                </td>
                                <td>
                                    <a href="{{ route('album.edit', $item->kd_album) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('album.destroy', $item->kd_album) }}" method="POST" style="display:inline;">
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
