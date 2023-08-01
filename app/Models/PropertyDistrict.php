<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyDistrict extends Pivot
{
    use SoftDeletes;
    protected $table = 'property_district';
    protected $fillable = ['property_id', 'district_id'];
}
