<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperDistrict extends Model
{
    use HasFactory;

    protected $table = 'developer_districts';

    protected $fillable = [
        'developer_id',
        'district_id',
    ];
}
