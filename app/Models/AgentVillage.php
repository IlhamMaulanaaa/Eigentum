<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentVillage extends Pivot
{
    use SoftDeletes;
    protected $table = 'agent_village';
    protected $fillable = ['agent_id', 'village_id'];
}
