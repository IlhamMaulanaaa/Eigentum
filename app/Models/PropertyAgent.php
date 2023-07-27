<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAgent extends Model
{
    use HasFactory;

    protected $table = "property_agent";
    protected $guarded = ['id'];
    
}
