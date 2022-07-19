<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function view(){
        $employees=Employee::with('department','designationRelation')->OrderBy('id','desc')->paginate(5);


        return view('Backend.employee.employee',compact('employees'));
    }
    public function form(){
        $department = Department:: all();
        $designation = Designation::all();
        return view('Backend.employee.employeeform', compact('department','designation'));
    }
    public function store(Request $request){
        $request->validate([
            'employee_name'=>'required|string',
            'phone_number'=>'required|string',
            'employee_email'=>'required|string',
        ]);
        Employee::create([
          'employee_name'=>$request->employee_name,
          'phone_number'=>$request->phone_number,
          'employee_email'=>$request->employee_email,
          'date_of_birth'=>$request->date_of_birth,
          'age'=>$request->age,
          'department_id' => $request->department,
          'designation' =>$request->designation

        ]);
        return redirect()->route('view.employee');

    }
    public function delete($id){
        $employees=Employee::find($id)->delete();
        return redirect()->back();
    }
    public function views($id){
        $employees=Employee::find($id);
        return view('Backend.employee.employeeview',compact('employees'));

    }
}
