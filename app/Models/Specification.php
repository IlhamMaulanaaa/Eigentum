<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Specification extends Model
{
    use HasFactory;
    

    protected $table = "specifications";
    protected $guarded = ['id'];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
