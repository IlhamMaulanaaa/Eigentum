<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentProvince extends Pivot
{
    use SoftDeletes;
    protected $table = 'agent_province';
    protected $fillable = ['agent_id', 'province_id'];
}
