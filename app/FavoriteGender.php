<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteGender extends Model
{
    protected $fillable = [
       'gender_id','parther_id'
    ];
}
