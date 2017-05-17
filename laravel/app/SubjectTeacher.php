<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{

    protected $table = 'subjectteachers';
    public function marksheets(){
        return $this->hasMany('App\MarkSheet');
    }

    public function sortMarkSheet(){

    }
}
