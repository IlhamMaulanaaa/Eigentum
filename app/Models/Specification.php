<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Specification extends Model
{
    use HasFactory;
    use SoftDeletes;

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
