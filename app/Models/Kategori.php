<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id'; // Ganti sesuai primary key Anda

    protected $fillable = [
        'judul',
        'deskripsi',
    ];

    public $timestamps = false; // Set true jika Anda menggunakan created_at dan updated_at
}
