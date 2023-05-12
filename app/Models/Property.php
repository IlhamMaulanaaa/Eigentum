<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'properties';
    protected $guarded = ['id'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // public function type()
    // {
    //     return $this->hasMany(Type::class);
    // }
    // public function develop()
    // {
    //     return $this->hasMany(Developer::class);
    // }

    // public function agent()
    // {
    //     return $this->hasMany(Agent::class);
    // }



}
