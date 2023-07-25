<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Developer extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $table = "developers";
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'developer_id');
    }
    public function units(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    public function owners(): HasOne
    {
        return $this->hasOne(Owner::class, 'developer_id'); 
    }
    
    public function provinces(): BelongsToMany
    {
        return $this->belongsToMany(Province::class,'developer_provinces', 'developer_id', 'province_id');
    }
    
    public function regencies(): BelongsToMany
    {
        return $this->belongsToMany(Regency::class,'developer_regencies', 'developer_id', 'regency_id');
    }

    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class,'developer_districts', 'developer_id', 'district_id');
    }

    public function villages(): BelongsToMany
    {
        return $this->belongsToMany(Village::class,'developer_villages', 'developer_id', 'village_id');
    }

}
