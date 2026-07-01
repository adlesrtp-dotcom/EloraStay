<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = [
        'tipe_kamar_id',
        'nama_fasilitas'
    ];

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class);
    }
}