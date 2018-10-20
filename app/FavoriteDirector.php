<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteDirector extends Model
{
    protected $fillable = [
       'director_id','parther_id'
    ];
}
