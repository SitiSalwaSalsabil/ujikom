<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $album= Album::all(); // Ambil semua data dari model Informasi
        return view('ialbum.index', compact('album'));
    }

    // Menampilkan form untuk menambah album
    public function create()
    {
        return view('album.create'); // Mengarahkan ke view untuk membuat album baru
    }

    // Menyimpan album baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul_album' => 'required|string|max:255',
            'isi_album' => 'required|string',
            'user_id' => 'required|integer', // Pastikan user_id valid
            'status_album' => 'required|boolean',
        ]);

        Album::create([
            'judul_album' => $request->judul_album,
            'isi_album' => $request->isi_album,
            'user_id' => $request->user_id,
            'status_album' => $request->status_album,
            'created_at' => now(),
            'updated_at' => now(),
        ]); // Menyimpan data album ke database

        return redirect()->route('album.index')->with('success', 'Album berhasil ditambahkan.'); // Redirect dengan pesan sukses
    }

    // Menampilkan album berdasarkan ID
    public function show(Album $album)
    {
        return view('album.show', compact('album')); // Mengarahkan ke view untuk menampilkan detail album
    }

    // Menampilkan form untuk mengedit album
    public function edit(Album $album)
    {
        return view('album.edit', compact('album')); // Mengarahkan ke view untuk mengedit album
    }

    // Memperbarui album di database
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'judul_album' => 'required|string|max:255',
            'isi_album' => 'required|string',
            'user_id' => 'required|integer', // Pastikan user_id valid
            'status_album' => 'required|boolean',
        ]);

        $album->update([
            'judul_album' => $request->judul_album,
            'isi_album' => $request->isi_album,
            'user_id' => $request->user_id,
            'status_album' => $request->status_album,
            'updated_at' => now(),
        ]); // Memperbarui data album di database

        return redirect()->route('album.index')->with('success', 'Album berhasil diperbarui.'); // Redirect dengan pesan sukses
    }

    // Menghapus album dari database
    public function destroy(Album $album)
    {
        $album->delete(); // Menghapus album dari database
        return redirect()->route('album.index')->with('success', 'Album berhasil dihapus.'); // Redirect dengan pesan sukses
    }
}
