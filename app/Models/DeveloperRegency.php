<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeveloperRegency extends Pivot
{
    use SoftDeletes;
    protected $table = 'developer_regency';
    protected $fillable = ['developer_id', 'regency_id'];
}
