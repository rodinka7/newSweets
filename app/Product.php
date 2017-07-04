<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    $this->belongsTo('App\Category');
    $this->hasMany('App\Candy');
    
    return $this;
}
