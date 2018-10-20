<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteActor extends Model
{
    protected $fillable = [
       'actor_id','parther_id'
    ];
}
