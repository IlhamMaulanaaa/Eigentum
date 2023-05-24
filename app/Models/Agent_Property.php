<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent_Property extends Model
{
    use HasFactory;

    protected $table = "agent_property";
    protected $guarded = ['id'];
    
}
