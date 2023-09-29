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
    protected $fillable = [
        'status',
        'company',
        'company_email',
        'company_password',
        'address',
        'license',
        'telp',
        'ktp',
        'face',
    ];
    // protected $fillable = [
    //     // 'license' // Kolom yang digunakan untuk otentikasi
    // ];
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function developer()
    {
        return $this->hasOne(Developer::class)->through('developers');
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
        return $this->hasMany(Unit::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_developer', 'developer_id', 'user_id');
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

    public function scopefilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('comipany', 'like', '%' . $search . '%')
                // ->orWhere('description','like','%'.$search.'%')
                ->orWhere('email', 'like', '%' . $search . '%');
        });

        $query->when($filters['regency_id'] ?? false, function ($query, $regencyId) {
            return $query->whereHas('regencies', function ($query) use ($regencyId) {
                $query->where('id', $regencyId);
            });
        });

        return $query;
    }
}
