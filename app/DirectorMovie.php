<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectorMovie extends Model
{
    protected $fillable = [
       'director_id','movie_id'
    ];
}
