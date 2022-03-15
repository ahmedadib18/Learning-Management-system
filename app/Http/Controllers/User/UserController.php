<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Courses;
use App\Video;

class UserController extends Controller
{
    public function index()
    {

        return view('user.index');
    }

     public function show()
    {
        $adib=Courses::all();
        return view('user.show')->with('adib',$adib);
    }
     public function delete($id)
    {
        $adib=Courses::find($id);
        $adib->delete();
       return redirect('user/showallcourses');
        
    }
     public function addfiles()
    {
        $a=Courses::all();
        return view('user.addfiles')->with('a',$a);
    }
     public function storefiles(Request $request)
    {
        $videos = new Video;
        $videos->courses_id=$request->courses_id;
        $videos->name = $request->name;
        $videos->link = $request->link;
        

       
        $videos->save();
        
       return view('user.index');
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
    
}
