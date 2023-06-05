<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $guarded = ['id'];

    public function agents() 
    {
        return $this->hasMany(Agent::class, 'location_id');
    }
}
