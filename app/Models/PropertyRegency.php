<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyRegency extends Pivot
{
    use SoftDeletes;
    protected $table = 'property_regency';
    protected $fillable = ['property_id', 'regency_id'];
}
