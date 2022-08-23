<?php

namespace App\Http\Controllers\Backend;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class DesignationController extends Controller
{
    public function view(){
        $designation=Designation::with('departmentrelation')->OrderBy('id','desc')->paginate(5);
        return view('Backend.designation.designation',compact('designation'));
    }
    public function form(){
        $department=Department::all();
        return view('Backend.designation.designationform',compact('department'));
    }
    public function store(Request $request){

        $request->validate([
            'designation'=>'required|string',
            'department_id'=>'required|string',
            'status'=>'required|string',

        ]);
        // dd($request->all());
        Designation::create([
           'designation'=>$request->designation,
           'department_id'=>$request->department_id,
           'status'=>$request->status,
        ]);
        return redirect()->route('view.designation');
    }
    public function delete($id){
        $designation=Designation::find($id)->delete();
        return redirect()->back();
    }
    public function views($id){
        $designation=Designation::find($id);
        return view('Backend.designation.designationview',compact('designation'));
    }
    public function edit($id){
        $department=Department::all();
        $designation=Designation::find($id);
        return view('Backend.designation.edit',compact('department','designation'));

    }
    public function update(Request $request,$id){
        $designation=Designation::find($id);
        $designation->update([
            'designation'=>$request->designation,
           'department_name'=>$request->department_name,
           'status'=>$request->status,

        ]);
        return redirect()->route('view.designation');
    }
}
