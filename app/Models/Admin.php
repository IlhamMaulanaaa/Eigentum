<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'admins';
    protected $guarded = ['admin'];
    protected $fillable = [
        'email', 'password', // Kolom yang digunakan untuk otentikasi
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
