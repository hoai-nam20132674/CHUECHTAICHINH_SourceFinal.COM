<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'courses';
    public function lessons(){
        return $this->belongsToMany('App\Lesson','lesson_courses','course_id','lesson_id');
    }
}
