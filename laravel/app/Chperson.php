<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chperson extends Model
{

    protected $table = 'chpeople';

    public function posts(){

        return $this->hasMany('App\ClubPost');
    }
}
