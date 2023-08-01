<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Authenticatable
{
    use HasFactory, Notifiable;
    
    
    protected $table = 'agents';
    protected $guarded = ['developer'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];  
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'agent_property', 'property_id', 'agent_id');
    }

    public function locations()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}