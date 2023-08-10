<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\Models\Favorite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }
    public function agents()
    {
        return $this->belongsToMany(Agent::class, 'users_agent', 'user_id', 'agent_id');
    }
    public function developers()
    {
        return $this->belongsToMany(Developer::class, 'users_developer', 'user_id', 'developer_id');
    }

    public function scopefilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('name','like','%'.$search.'%')
            // ->orWhere('description','like','%'.$search.'%')
            ->orWhere('role','like','%'.$search.'%');
        });
    }
}
