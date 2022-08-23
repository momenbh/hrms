<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class EmployeeController extends Controller
{
    public function view(){
        $employees=User::with('department','designationRelation')->OrderBy('id','desc')->paginate(5);


        return view('Backend.employee.employee',compact('employees'));
    }
    public function form(){
        $department = Department:: all();
        $designation = Designation::all();
        return view('Backend.employee.employeeform', compact('department','designation'));
    }
    public function store(Request $request){
        // dd($request->image);
        $request->validate([
            'name'=>'required|string',
            'phone_number'=>'required|string',
            'email'=>'required|string',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileRename = "Employee_" . date('Ymdhis') .rand(1, 1000) . '.' . $file->getClientOriginalExtension();
            $file -> storeAs('Employee/',  $fileRename);
        }

        User::create([
          'name'=>$request->name,
          'phone_number'=>$request->phone_number,
          'email'=>$request->email,
          'date_of_birth'=>$request->date_of_birth,
          'age'=>$request->age,
          'department_id' => $request->department,
          'password'=>bcrypt($request->password),
          'designation' =>$request->designation,
          'image' => $fileRename,

        ]);
        return redirect()->route('view.employee');

    }
    public function delete($id){
        $employees=Employee::find($id)->delete();
        return redirect()->back();
    }
    public function views($id){
        $employees=User::find($id);
        return view('Backend.employee.employeeview',compact('employees'));

    }
    public function edit($id){

        $department = Department:: all();
        $designation = Designation::all();
        $employees=User::find($id);
        return view('Backend.employee.edit',compact('department','designation','employees'));


    }
    public function update(Request $request,$id){
        $employees=User::find($id);
        $employees->update([
            'employee_name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'employee_email'=>$request->email,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,
            'department_id' => $request->department,
            'designation' =>$request->designation,


        ]);
        return redirect()->route('view.employee');
    }
    public function report(){
        $employees=User::OrderBy('id','desc')->paginate(5);
        return view('Backend.employee.employeereport',compact('employees'));
    }
}
