<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = ['description', 'state', 'user_id'];

//    public static function create(array $array)
//    {
//    }
}

