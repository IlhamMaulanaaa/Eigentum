<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentRegency extends Pivot
{
    use SoftDeletes;
    protected $table = 'agent_regency';
    protected $fillable = ['agent_id', 'regency_id'];
}
