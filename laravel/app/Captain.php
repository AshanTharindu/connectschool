<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    use \Illuminate\Auth\Authenticatable;

    public function posts(){

        return $this->hasMany('App\Post');
    }
}
