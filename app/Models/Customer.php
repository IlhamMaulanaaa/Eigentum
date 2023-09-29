<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Customer extends Model
{
    use HasFactory;
    

    protected $table = "customers";
    protected $guarded = ['id'];
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    


}
