<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function view(){
        return view('Backend.department.department');
    }
    public function form(){
        return view('Backend.department.departmentform');
    }
    public function store(Request $request){
        // dd($request->all());
        Department::create([
            'department_name'=>$request->department_name,
            'department_place'=>$re0quest->department_place,
            'department_document'=>$request->department_documentation,
            'department_email'=>$request->department_email,

        ]);
        return redirect()->back();
    }
}
