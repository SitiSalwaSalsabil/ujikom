<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi'; // Nama tabel di database
    protected $primaryKey = 'kd_info'; // Primary key

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'judul_info',
        'isi_info',
        'tgl_post_info',
        'status_info',
    ];
    public $timestamps = false; 
}
