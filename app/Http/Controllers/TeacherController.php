<?php

namespace App\Http\Controllers;
use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher_index(){
        $teachers = teacher::all();
        return view('teachers.index',compact('teachers'));
    }

    public function teacher_create(){
        return view('teachers.create');
    }

    public function teacher_store(){
        $teacher = teacher::all();
           teacher::create([
           'name' => request('name'),
           'address' => request('address'),
           'email' => request('email'),
           'mobile' => request('mobile')
           
        ]);
        return redirect('teacher/index');
    }
}
