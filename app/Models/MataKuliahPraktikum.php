<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahPraktikum extends Model
{
    use HasFactory;

    // MataKuliahPraktikum.php
    protected $fillable = [
        'nama_mata_kuliah',
        'jenis_mata_kuliah',
        'is_active',
        'gambar',
    ];

    
public function mahasiswaPraktikum()
{
    return $this->hasMany(MahasiswaPraktikum::class);
}

// MahasiswaPraktikum.php
public function mataKuliahPraktikum()
{
    return $this->belongsTo(MataKuliahPraktikum::class);
}

}

