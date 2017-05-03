<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model implements Authenticatable

{
    use \Illuminate\Auth\Authenticatable;


    public function guardians(){
        return $this->belongsTo('App\Guardian');
    }

    public function marksheets(){
        return $this->hasMany('App\MarkSheet');
    }

}
