<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProvince extends Model
{
    use HasFactory;

    protected $table = 'developer_provinces';
    protected $guarded = ['id'];

    
}
