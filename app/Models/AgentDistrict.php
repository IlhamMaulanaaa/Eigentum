<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentDistrict extends Pivot
{
    use SoftDeletes;
    protected $table = 'agent_district';
    protected $fillable = ['agent_id', 'district_id'];
}
