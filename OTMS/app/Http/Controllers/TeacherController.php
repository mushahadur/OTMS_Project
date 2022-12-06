<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.teacher.index');
    }
    public function add(){
        return view('admin.teacher.add');
    }
    public function create(Request $request){
        Teacher::newTeacher($request);
        return redirect('/teacher/manage')->with('message', 'Teacher Add Successfully');
    }

    public function manage(){
        $this->teachers = Teacher::all();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }

    public function edit($id)
    {
        return view('admin.teacher.edit', ['teacher'=>Teacher::find($id)]);
    }


    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/teacher/manage')->with('message','Teacher info Update successfully');
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/teacher/manage')->with('message','Teacher info delete successfully');
    }
}
