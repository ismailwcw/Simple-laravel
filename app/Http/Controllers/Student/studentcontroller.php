<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index()
        {
            $students = student::all();
            return view('backend.student.index',compact('students'));
        }

    public function create()
        {
            return view('backend.student.create');
        }

        
        public function store(Request $request)
        {
            student::create([
                'name'      =>$request->name,
                'email'     =>$request->email,
                'phone'     =>$request->phone,
                'address'   =>$request->address,

            ]);
            
            return redirect()->route('student.list')->with([
                'message' => 'student created successfully'
            ]);
        }
        
        public function edit($id)
            {
                $student = student::FindOrFail($id);
                return view('backend.student.edit', compact('student'));
            }
        public function update(Request $request, $id)
            {
                $student = student::FindOrFail($id);
                $student->update([
                    'name'      =>$request->name,
                    'email'     =>$request->email,
                    'phone'     =>$request->phone,
                    'address'   =>$request->address,
                ]);
                return redirect()->route('student.list')->with([
                'message' => 'student Updated successfully'
            ]);
            }
            
        public function delete($id)
            {
                student::FindOrFail($id)->delete();
                return redirect()->route('student.list')->with(['message' => 'student Deleted Successfully']);
            }
}
