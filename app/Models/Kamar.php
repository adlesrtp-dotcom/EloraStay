<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TipeKamar;
use App\Models\Reservasi;

class Kamar extends Model
{
    protected $table = 'kamars';

    protected $fillable = [
        'tipe_kamar_id',
        'nomor_kamar',
        'status'
    ];

    /**
     * Relasi ke Tipe Kamar
     * Satu kamar dimiliki oleh satu tipe kamar
     */
    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'tipe_kamar_id');
    }

    /**
     * Relasi ke Reservasi
     * Satu kamar dapat memiliki banyak reservasi
     */
    public function reservasis()
    {
        return $this->hasMany(Reservasi::class, 'kamar_id');
    }
}
