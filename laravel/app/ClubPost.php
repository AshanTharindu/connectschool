<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubPost extends Model
{
    public function chperson(){
        return $this->belongsTo('App\Chperson');
    }
}
