<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Type extends Model
{
    use HasFactory;
    
    protected $table = "types";

    protected $guarded = ['id'];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'type_id');
    }
}
