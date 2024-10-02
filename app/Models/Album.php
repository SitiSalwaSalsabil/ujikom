<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'album'; // Nama tabel sesuai dengan database
    protected $primaryKey = 'kd_album'; // Primary key

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'judul_album',
        'isi_album',
        'user_id',
        'status_album',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;
}
