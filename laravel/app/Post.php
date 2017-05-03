<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function captain(){
        return $this->belongsTo('App\Captain');
    }

    public function chperson(){
        return $this->belongsTo('App\Chperson');
    }
}
