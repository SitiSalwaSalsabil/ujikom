@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Informasi</h1>
        <br>

        <form action="{{ route('informasi.update', $informasi) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul_info" class="form-label">Judul Informasi</label>
                <input type="text" name="judul_info" id="judul_info" class="form-control" value="{{ $informasi->judul_info }}" required>
            </div>
            <div class="mb-3">
                <label for="isi_info" class="form-label">Isi Informasi</label>
                <textarea name="isi_info" id="isi_info" class="form-control" required>{{ $informasi->isi_info }}</textarea>
            </div>
            <div class="mb-3">
                <label for="tgl_post_info" class="form-label">Tanggal Posting</label>
                <input type="date" name="tgl_post_info" id="tgl_post_info" class="form-control" value="{{ $informasi->tgl_post_info }}" required>
            </div>
            <div class="mb-3">
                <label for="status_info" class="form-label">Status</label>
                <select name="status_info" id="status_info" class="form-select" required>
                    <option value="1" {{ $informasi->status_info ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ !$informasi->status_info ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('informasi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
