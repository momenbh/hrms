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
            'phone_number'=>'required|string',
            'department_details'=>'required|string',
            'department_email'=>'required|string',

        ]);
        Department::create([
            'department_name'=>$request->department_name,
            'phone_number'=>$request->phone_number,
            'department_details'=>$request->department_details,
            'department_email'=>$request->department_email,

        ]);
       
        return redirect()->route('view.department');
    }
    public function delete($id){
        $department=Department::find($id)->delete();
        return redirect()->back();
     }
     public function views($id){
        $department=Department::find($id);
        return view('Backend.department.departmentview',compact('department'));
     }
     public function edit($id){
        $department=Department::find($id);
        return view('Backend.department.edit',compact('department'));

     }
     public function update(Request $request,$id){
        $department=Department::find($id);
        $department->update([
            'department_name'=>$request->department_name,
            'phone_number'=>$request->phone_number,
            'department_details'=>$request->department_details,
            'department_email'=>$request->department_email,

        ]);
        return redirect()->route('view.department');
     }
}
