<?php

namespace App\Models;

use App\Models\Subcribe;
use App\Models\Subscribe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    //
    protected $except = [
        '/callback',
    ];

    //subscribe
    public function subscribe(): BelongsTo
    {
        return $this->belongsTo(Subscribe::class);
    }

    //user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
