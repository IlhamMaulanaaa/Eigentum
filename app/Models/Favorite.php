<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'unit_id'];

    protected $tables = 'favorites';

    protected $guard = [];


    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function units()
{
    return $this->belongsToMany(Unit::class, 'favorites', 'favorite_id', 'unit_id');
}

}
