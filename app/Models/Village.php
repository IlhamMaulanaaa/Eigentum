<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace App\Models;

use App\Models\Agent;
use App\Models\Developer;
use AzisHapidin\IndoRegion\Traits\VillageTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Village Model.
 */
class Village extends Model
{
    use VillageTrait;

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'villages';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'district_id'
    ];

	/**
     * Village belongs to District.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function villages(): BelongsToMany
    {
        return $this->belongsToMany(Village::class,'developer_villages',  'village_id','developer_id');
    }

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class,'developer_villages',  'village_id','developer_id');
    }
    
    public function agents(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class,'agent_villages',  'village_id','agent_id');
    }


}
