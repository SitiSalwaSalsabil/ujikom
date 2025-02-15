@extends('layouts.app')

@section('content')
<br>
    <div class="container">
    <div class="mb-3">
            <a href="{{ route('agenda.create') }}" class="btn btn-primary">Tambah Agenda</a> <!-- Tombol Tambah Kategori -->
        </div>

        <form action="{{ route('agenda.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul_agenda" class="form-label">Judul Agenda</label>
                <input type="text" name="judul_agenda" id="judul_agenda" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="isi_agenda" class="form-label">Isi Agenda</label>
                <textarea name="isi_agenda" id="isi_agenda" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tgl_agenda" class="form-label">Tanggal Agenda</label>
                <input type="date" name="tgl_agenda" id="tgl_agenda" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tgl_post_agenda" class="form-label">Tanggal Posting</label>
                <input type="date" name="tgl_post_agenda" id="tgl_post_agenda" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status_agenda" class="form-label">Status</label>
                <select name="status_agenda" id="status_agenda" class="form-select" required>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
