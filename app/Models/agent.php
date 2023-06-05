<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = "agents";
    protected $guarded = ['id'];
    
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'agent_property');
    }

    public function locations()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
