<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'courses';
    public function videos(){
        return $this->belongsToMany('App\Video','video_courses','course_id','video_id');
    }
}
