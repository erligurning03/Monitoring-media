<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaOnline extends Model
{
    use HasFactory;
    protected $table = 'media_onlines';
    protected $guarded = [];

    protected $fillable =[
        'cuplikan_berita',
        'media_publikasi',
        'jenis_berita',
        'ringkasan_berita',
        'saran_tindak_lanjut',
        'waktu_tinjau',
    ];
}
