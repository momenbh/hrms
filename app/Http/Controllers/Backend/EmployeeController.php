<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function view(){
        $employees=Employee::paginate(5);
        return view('Backend.employee.employee',compact('employees'));
    }
    public function form(){
        $department = Department:: all();
        return view('Backend.employee.employeeform', compact('department'));
    }
    public function store(Request $request){
        Employee::create([
          'employee_name'=>$request->employee_name,
          'phone_number'=>$request->phone_number,
          'employee_email'=>$request->employee_email,
          'date_of_birth'=>$request->date_of_birth,
          'age'=>$request->age,
          'department_id' => $request->department,

        ]);
        return redirect()->route('view.employee');

    }
}
