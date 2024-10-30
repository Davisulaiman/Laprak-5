<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaPraktikum extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mahasiswa',
        'nim', // Tambahkan nim di sini
        'mata_kuliah_praktikum_id',
        'semester',
        'status_lulus',
        'dokumen', // Tambahkan dokumen jika perlu
    ];

    public function mataKuliahPraktikum()
    {
        return $this->belongsTo(MataKuliahPraktikum::class, 'mata_kuliah_praktikum_id');
    }
}
