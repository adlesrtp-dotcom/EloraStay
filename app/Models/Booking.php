<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

        'nama',
        'email',
        'telepon',
        'kamar_id',
        'checkin',
        'checkout',
        'total_harga',
        'status'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}