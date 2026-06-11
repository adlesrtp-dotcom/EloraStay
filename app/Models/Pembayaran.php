<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservasi;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';

    protected $fillable = [
        'reservasi_id',
        'metode_pembayaran',
        'total_bayar',
        'bukti_pembayaran',
        'status'
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
}