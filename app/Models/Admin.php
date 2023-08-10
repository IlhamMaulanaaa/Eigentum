<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $table = 'admins';
    protected $guarded = ['admin'];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
