<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function view(){
        $department=Department::OrderBy('id','desc')->paginate(5);
        return view('Backend.department.department',compact('department'));
    }
    public function form(){
        return view('Backend.department.departmentform');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'department_name'=>'required|string',
            'department_type'=>'required|string',
            'department_documentation'=>'required|string',
            'department_email'=>'required|string',

        ]);
        Department::create([
            'department_name'=>$request->department_name,
            'department_type'=>$request->department_type,
            'department_documentation'=>$request->department_documentation,
            'department_email'=>$request->department_email,

        ]);
        return redirect()->route('view.department');
    }
}
