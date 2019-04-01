<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $table = 'tb_tamu_lama';

    protected $fillable = ['id_anggota', 'nama', 'jurusan', 'ukuran_kaos','foto', 'ttd', 'waktu'];
}