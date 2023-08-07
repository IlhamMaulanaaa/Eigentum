<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Developer extends Authenticatable
{
    use Notifiable, SoftDeletes, HasFactory;

    public $timestamps = false;
    protected $table = 'developers';
    protected $guarded = ['developer'];
    // protected $fillable = [
    //     'name', 'email', 'password', // Kolom yang digunakan untuk otentikasi
    // ];
    public function getAuthPassword()
    {
        return $this->password;
    }

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'developer_id');
    }
    public function units(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    public function owners(): Hasone
    {
        return $this->hasone(Owner::class, 'developer_id');
    }

    public function provinces(): BelongsToMany
    {
        return $this->belongsToMany(Province::class, 'developer_provinces', 'developer_id', 'province_id');
    }

    public function regencies(): BelongsToMany
    {
        return $this->belongsToMany(Regency::class, 'developer_regencies', 'developer_id', 'regency_id');
    }

    public function districts(): BelongsToMany
    {
        return $this->belongsToMany(District::class, 'developer_districts', 'developer_id', 'district_id');
    }

    public function villages(): BelongsToMany
    {
        return $this->belongsToMany(Village::class, 'developer_villages', 'developer_id', 'village_id');
    }
}
