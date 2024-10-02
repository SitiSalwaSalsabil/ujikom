@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Album</h1>
        <br>

        <form action="{{ route('album.update', $album) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul_album" class="form-label">Judul Album</label>
                <input type="text" name="judul_album" id="judul_album" class="form-control" value="{{ $album->judul_album }}" required>
            </div>
            <div class="mb-3">
                <label for="isi_album" class="form-label">Isi Album</label>
                <textarea name="isi_album" id="isi_album" class="form-control" required>{{ $album->isi_album }}</textarea>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">ID Pengguna</label>
                <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $album->user_id }}" required>
            </div>
            <div class="mb-3">
                <label for="status_album" class="form-label">Status</label>
                <select name="status_album" id="status_album" class="form-select" required>
                    <option value="1" {{ $album->status_album ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ !$album->status_album ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('album.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
