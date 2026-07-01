<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fasilitas;   

class TipeKamar extends Model
{
    protected $table = 'tipe_kamars';

    protected $fillable = [
        'nama_tipe',
        'harga',
        'deskripsi',
        'gambar',
        'kapasitas',
        'ukuran',
        'rating',
        'wifi',
        'ac',
        'tv',
        'sarapan',
        'kamar_mandi'
    ];

    public function kamars()
    {
        return $this->hasMany(Kamar::class, 'tipe_kamar_id');
    }

    // TAMBAHKAN DI SINI
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'tipe_kamar_id');
    }
}