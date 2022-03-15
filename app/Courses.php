<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Courses;

class Courses extends Model

{
    protected $table="courses";
    public function video(){
    	return $this->hasmany('App\Video','courses_id','id');
    }
}
