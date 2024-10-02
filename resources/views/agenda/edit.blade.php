@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Agenda</h1>
        <br>

        <form action="{{ route('agenda.update', $agenda) }}" method="POST"> <!-- Ganti $informasi menjadi $agenda -->
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul_agenda" class="form-label">Judul Agenda</label>
                <input type="text" name="judul_agenda" id="judul_agenda" class="form-control" value="{{ $agenda->judul_agenda }}" required> <!-- Ganti $informasi menjadi $agenda -->
            </div>
            <div class="mb-3">
                <label for="isi_agenda" class="form-label">Isi Agenda</label>
                <textarea name="isi_agenda" id="isi_agenda" class="form-control" required>{{ $agenda->isi_agenda }}</textarea> <!-- Ganti $informasi menjadi $agenda -->
            </div>
            <div class="mb-3">
                <label for="tgl_agenda" class="form-label">Tanggal Agenda</label>
                <input type="date" name="tgl_agenda" id="tgl_agenda" class="form-control" value="{{ $agenda->tgl_agenda }}" required> <!-- Ganti $informasi menjadi $agenda -->
            </div>
            <div class="mb-3">
                <label for="tgl_post_agenda" class="form-label">Tanggal Posting</label>
                <input type="date" name="tgl_post_agenda" id="tgl_post_agenda" class="form-control" value="{{ $agenda->tgl_post_agenda }}" required> <!-- Ganti $informasi menjadi $agenda -->
            </div>
            <div class="mb-3">
                <label for="status_agenda" class="form-label">Status</label>
                <select name="status_agenda" id="status_agenda" class="form-select" required>
                    <option value="1" {{ $agenda->status_agenda ? 'selected' : '' }}>Aktif</option> <!-- Ganti $informasi menjadi $agenda -->
                    <option value="0" {{ !$agenda->status_agenda ? 'selected' : '' }}>Tidak Aktif</option> <!-- Ganti $informasi menjadi $agenda -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
