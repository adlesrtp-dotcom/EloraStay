<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamars';

    protected $fillable = [
        'tipe_kamar_id',
        'nomor_kamar',
        'status'
    ];

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'tipe_kamar_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}