<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function view(){
        $department=Department:: paginate(5);
        return view('Backend.department.department',compact('department'));
    }
    public function form(){
        return view('Backend.department.departmentform');
    }
    public function store(Request $request){
        // dd($request->all());
        Department::create([
            'department_name'=>$request->department_name,
            'department_type'=>$request->department_type,
            'department_documentation'=>$request->department_documentation,
            'department_email'=>$request->department_email,

        ]);
        return redirect()->route('view.department');
    }
}
