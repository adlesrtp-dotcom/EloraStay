<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Pembayaran;

class Reservasi extends Model
{
    protected $table = 'reservasis';

    protected $fillable = [
        'user_id',
        'kamar_id',
        'check_in',
        'check_out',
        'jumlah_tamu',
        'total_harga',
        'status'
    ];

    /**
     * Reservasi dimiliki oleh satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Reservasi memilih satu kamar
     */
    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    /**
     * Reservasi memiliki satu pembayaran
     */
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}