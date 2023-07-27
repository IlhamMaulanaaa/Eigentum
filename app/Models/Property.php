<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Property extends Model
{
    use HasFactory;
    

    protected $table = "properties";
    protected $guarded = ['id'];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function properties()
    {
        return new Property();
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function developers(): BelongsTo
    {
        return $this->belongsTo(Developer::class, 'developer_id',);
    }

    public function agents(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class, 'property_agent', 'agent_id', 'property_id');
    }
}
