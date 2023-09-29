<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeveloperDistrict extends Pivot
{
    use SoftDeletes;
    protected $table = 'developer_district';
    protected $fillable = ['developer_id', 'district_id'];
}
