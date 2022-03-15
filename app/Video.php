<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Courses;

class Video extends Model
{
    protected $table="videos";
    public function courses(){
    	return $this->belongsTo(Courses::class);
    }
}
