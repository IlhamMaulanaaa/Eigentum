<?php

namespace App\Models;

use App\Models\Favorite;
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

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id');
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

    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'unit_id');
    }

    protected static $marks = [
        Favorite::class,
    ];
}
