<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Developer extends Model
{
    use HasFactory;
    
    
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
}
