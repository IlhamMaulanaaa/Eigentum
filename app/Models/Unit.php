<?php

namespace App\Models;

use App\Models\Favorite;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'units';
    protected $guarded = ['id'];
    protected $columns = ['*'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // public function agents(): BelongsToMany
    // {
    //     return $this->belongsToMany(Agent::class, 'unit_agents')->withPivot('status_unit');
    // }
    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function specifications()
    {
        return $this->hasOne(Specification::class, 'unit_id');
    }

    public function images()
    {
        return $this->hasOne(Image::class, 'unit_id');
    }

    public function statuses(): BelongsToMany
    {
        return $this->belongsToMany(Status::class, 'unit_status', 'unit_id', 'status_id');
    }

    //     public function favorites()
    // {
    //     return $this->belongsToMany(Favorite::class, 'favorites', 'user_id', 'unit_id');
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'unit_id');
    }

    public function provinces(): BelongsToMany
    {
        return $this->belongsToMany(Province::class, 'property_province', 'property_id', 'province_id');
    }

    public function regencies(): BelongsToMany
    {
        return $this->belongsToMany(Regency::class, 'property_regency', 'property_id', 'regency_id');
    }

    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class, 'property_district', 'property_id', 'district_id');
    }

    public function villages(): BelongsToMany
    {
        return $this->belongsToMany(Village::class, 'property_village', 'property_id', 'village_id');
    }

    protected static $marks = [
        Favorite::class,
    ];

    public function scopefilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhere('price', 'like', '%' . $search . '%')
                    ->orwhereHas('statuses', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search . '%');
                    })->orWhereHas('properties', function ($query) use ($search) {
                        $query->where('title', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search . '%');
                    })->orWhereHas('properties.provinces', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search . '%');
                    })->orWhereHas('properties.regencies', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search . '%');
                    })->orwhereHas('properties.types', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search . '%');
                    });
            });
        });

        $query->when($filters['status'] ?? false, function ($query, $statuses) {
            $query->whereHas('statuses', function ($query) use ($statuses) {
                $query->whereIn('id', $statuses);
            });
        });

        $query->when($filters['types'] ?? false, function ($query, $types) {
            return $query->whereHas('properties.types', function ($query) use ($types) {
                $query->whereIn('id', $types);
            });
        });


        $query->when($filters['regency_id'] ?? false, function ($query, $regency_id) {
            return $query->whereHas('regencies', function ($query) use ($regency_id) {
                $query->where('id', $regency_id);
            });
        });

        $query->when($filters['property_id'] ?? false, function ($query, $property_id) {
            $query->where('property_id', $property_id);
        });

        $query->when($filters['bedroom'] ?? false, function ($query, $bedroom) {
            $query->whereHas('specifications', function ($query) use ($bedroom) {
                $query->where('bedroom', $bedroom);
            });
        });

        $query->when($filters['bathroom'] ?? false, function ($query, $bathroom) {
            $query->whereHas('specifications', function ($query) use ($bathroom) {
                $query->where('bathroom', $bathroom);
            });
        });

        $query->when($filters['surface_area'] ?? false, function ($query, $surface_area) {
            $query->whereHas('specifications', function ($query) use ($surface_area) {
                $query->where('surface_area', $surface_area);
            });
        });

        $query->when($filters['building_area'] ?? false, function ($query, $building_area) {
            $query->whereHas('specifications', function ($query) use ($building_area) {
                $query->where('building_area', $building_area);
            });
        });

        $query->when($filters['floor'] ?? false, function ($query, $floor) {
            $query->whereHas('specifications', function ($query) use ($floor) {
                $query->where('floor', $floor);
            });
        });
        $query->when(isset($filters['min_price']) && is_numeric($filters['min_price']), function ($query) use ($filters) {
            $query->where(function ($query) use ($filters) {
                $query->where('price', '>=', $filters['min_price']);
            });
        });

        $query->when(isset($filters['max_price']) && is_numeric($filters['max_price']), function ($query) use ($filters) {
            $query->where(function ($query) use ($filters) {
                $query->where('price', '<=', $filters['max_price']);
            });
        });

        $query->when($filters['price_range'] ?? false, function ($query, $price_range) {
            [$minPrice, $maxPrice] = explode('-', $price_range);

            $query->whereBetween('price', [$minPrice, $maxPrice]);
        });
    }
}
