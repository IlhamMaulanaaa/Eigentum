<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = "images";

    protected $guarded = ['id'];

    protected $fillable = [
        'livingroomimg',
        'bedroomimg',
        'bathroomimg',
        'kitchenimg',
        'etcimg',
        'unit_id'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
