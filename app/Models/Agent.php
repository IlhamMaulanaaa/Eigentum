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

    protected $guarded = ['id'];
    protected $table = "agents";

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // public function properties(): HasMany
    // {
    //     return $this->hasMany(Property::class, 'agent_id');
    // }
    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'agent_property');
    }
}
