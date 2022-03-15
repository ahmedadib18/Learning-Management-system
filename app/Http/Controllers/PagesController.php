<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\Video;

class PagesController extends Controller
{
     public function index()
    {
          $Courses= Courses::all();
          
          
          return view('index')->with('Courses',$Courses);
    }
     public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $courses = new Courses;
        $courses->name = $request->name;
        $courses->code = $request->code;
        $courses->Video = $request->Video;
        $courses->Files = $request->Files;
        $courses->Notes = $request->Notes;
        

       
        $courses->save();
        
        return redirect()->route('user.dashboard');
    }

    public function showcourse($id){
     
    
    $data = Courses::find($id)->video->pluck('link','name');
    $adib = Courses::find($id)->video->pluck('name');

   
    return view("showcourse", compact('data','adib'));
    }
    public function contact()
    {
          return view('contact');
    }
      
}
