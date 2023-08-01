<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitStatus extends Pivot
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'unit_status';
    protected $guarded = ['id'];
    
}
