<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $table = 'lessons';
    public function courses(){
        return $this->belongsToMany('App\Course','lesson_courses','lesson_id','course_id');
    }
    public function add($request){
        $this->title = $request->title;
        $this->content = $request->content;
        $this->status = $request->status;
        $this->type = $request->type;
        $this->videolink = $request->videolink;
        $this->save();
    }
}
