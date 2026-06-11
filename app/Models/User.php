<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Reservasi;

#[Fillable([
    'name',
    'email',
    'password',
    'role',
    'telepon'
])]

#[Hidden([
    'password',
    'remember_token'
])]

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Satu user dapat memiliki banyak reservasi
     */
    public function reservasis()
    {
        return $this->hasMany(Reservasi::class);
    }
}