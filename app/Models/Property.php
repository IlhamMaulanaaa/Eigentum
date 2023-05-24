<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "properties";
    protected $guarded = ['id'];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class, 'developer_id');
    }

    public function agent(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class, 'agent_property');
    }
}
