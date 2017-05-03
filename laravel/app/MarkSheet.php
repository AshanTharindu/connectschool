<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkSheet extends Model
{

    protected $table = 'mark_sheets';

    public function subjectteachers(){
        return $this->belongsTo('App\SubjectTeacher');
    }

    public function students(){
        return $this->belongsTo('App\Student');
    }
}
