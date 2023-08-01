<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyVillage extends Pivot
{
    use SoftDeletes;
    protected $table = 'property_village';
    protected $fillable = ['property_id', 'village_id'];
}
