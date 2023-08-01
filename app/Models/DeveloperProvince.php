<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeveloperProvince extends Pivot
{
    use SoftDeletes;
    protected $table = 'developer_province';
    protected $fillable = ['developer_id', 'province_id'];
}
