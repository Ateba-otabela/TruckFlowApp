<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index(){
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    public function create(){
        
        return view('students.create');
    }

    public function store(request $request){

        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'matricle' => 'required|string',
        ]);
        try {

            
             Student::create([
                'name' => request('name'),
                'address' => request('address'),
                'mobile' => request('mobile'),
                'matricle' => request('matricle')
               ]);
               return redirect('student/index')->with('success', 'Student added successfully!');
            
        }catch(\Exeption $e){
               return redirect('student/create')->with('success', 'Student added successfully!');
        }
       
    }


    public function edit($id){
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }
   public function update(Request $request, $id){
        $students = Student::find($id);
        $students->name = $request->input('name');
        $students->address = $request->input('address');
        $students->mobile = $request->input('mobile');
        $students->save();

        return redirect('student/index')->with('success', 'Student edited successfully!');
   }

    public function show($id){
        $students = Student::find($id);
               
        return view('students.show',compact('students'))->with('success', 'Student Added Successfully');
    }

    public function delete($id){
         $students = Student::find($id);
         $students->destroy($id);
         return redirect('student/index')->with('success', 'Student deleted successfully!');
    }
}
