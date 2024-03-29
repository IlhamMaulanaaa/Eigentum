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

    public function provinces(): BelongsToMany
    {
        return $this->belongsToMany(Province::class,'property_province', 'property_id', 'province_id');
    }

    public function regencies(): BelongsToMany
    {
        return $this->belongsToMany(Regency::class,'property_regency', 'property_id', 'regency_id');
    }

    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class,'property_district', 'property_id', 'district_id');
    }

    public function villages(): BelongsToMany
    {
        return $this->belongsToMany(Village::class,'property_village', 'property_id', 'village_id');
    }

    public function scopefilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('title','like','%'.$search.'%')
            // ->orWhere('description','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%');
        });

        $query->when($filters['developer_id'] ?? false, function($query, $developer_id){
            $query->where('developer_id',$developer_id);
        });

        $query->when($filters['regency_id'] ?? false, function ($query, $regencyId) {
            return $query->whereHas('regencies', function ($query) use ($regencyId) {
                $query->where('id', $regencyId);
            });
        });

        return $query;
    }

    public function getPriceRangeAttribute()
    {
        $lowestPrice = $this->units()->min('price');
        $highestPrice = $this->units()->max('price');

        return "Rp. " . number_format($lowestPrice, 0, ',', '.') . " - Rp. " . number_format($highestPrice, 0, ',', '.');
    }
}
