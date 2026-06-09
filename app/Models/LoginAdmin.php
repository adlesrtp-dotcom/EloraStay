<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginAdmin extends Model
{
    protected $table = 'loginadmin';

    protected $primaryKey = 'id_admin';

    public $timestamps = false;
}