<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderMovie extends Model
{
    protected $fillable = [
       'gender_id','movie_id'
    ];
}
