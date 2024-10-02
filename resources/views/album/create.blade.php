@extends('layouts.app')

@section('content')
<br>
    <div class="container">
        <div class="mb-3">
            <a href="{{ route('album.create') }}" class="btn btn-primary">Tambah Album</a> <!-- Tombol Tambah Album -->
        </div>

        <form action="{{ route('album.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul_album" class="form-label">Judul Album</label>
                <input type="text" name="judul_album" id="judul_album" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="isi_album" class="form-label">Isi Album</label>
                <textarea name="isi_album" id="isi_album" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">ID Pengguna</label>
                <input type="number" name="user_id" id="user_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status_album" class="form-label">Status Album</label>
                <select name="status_album" id="status_album" class="form-select" required>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('album.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
