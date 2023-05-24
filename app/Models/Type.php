<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "types";

    protected $guarded = ['id'];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function property()
    {
        return $this->hasMany(Property::class, 'type_id');
    }
}
