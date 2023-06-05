<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Unit extends Model
{
    use HasFactory;
    

    protected $table = 'units';
    protected $guarded = ['id'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function specifications()
    {
        return $this->hasOne(Specification::class, 'unit_id');
    }

    public function images()
    {
        return $this->hasOne(Image::class, 'unit_id');
    }

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function status(): BelongsToMany
    {
        return $this->belongsToMany(Status::class, 'unit_status', 'unit_id', 'status_id');
    }
}
