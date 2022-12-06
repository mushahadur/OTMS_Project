<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $this->categories = Category::all();
        return view('teacher.course.index', ['categories' => $this->categories]);
    }
    public function create(Request $request){
        Course::newCourse($request);
        return redirect('/course/manage')->with('message', 'Course Add Successfully');
    }
    public function manage(){
        $this->course = Course::all();
         return view('teacher.course.manage',['courses'=>$this->course]);
    }
    public function  edit($id){
        return view('teacher.course.edit') ;
    }
    public function update(Request $request, $id){

    }
    public function delete($id){

    }
}
