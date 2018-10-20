<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parther extends Model
{
    protected $fillable = [
       'name','address','phone'
    ];
}
