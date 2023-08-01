<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeveloperVillage extends Pivot
{
    use SoftDeletes;
    protected $table = 'developer_village';
    protected $fillable = ['developer_id', 'village_id'];
}
