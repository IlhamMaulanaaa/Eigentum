<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyProvince extends Pivot
{
    use SoftDeletes;
    protected $table = 'property_province';
    protected $fillable = ['property_id', 'province_id'];
}
