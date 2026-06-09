<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginPelanggan extends Model
{
    protected $table = 'loginpelanggan';

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'nama',
        'email',
        'password'
    ];

    public $timestamps = false;
}