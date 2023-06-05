<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitStatus extends Model
{
    use HasFactory;

    protected $table = 'unit_status';
    protected $guarded = ['id'];
    
}
