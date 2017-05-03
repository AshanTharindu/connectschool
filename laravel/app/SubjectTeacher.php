<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    public function marksheets(){
        return $this->hasMany('App\MarkSheet');
    }

    public function sortMarkSheet(){

    }
}
