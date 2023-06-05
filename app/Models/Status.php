<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = "statuses";
    protected $guarded = ['id'];

    public function unit()
    {
        return $this->belongsToMany(Unit::class, 'unit_status', 'status_id', 'unit_id');
    }
}
