<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function view(){
        $attendance=Attendance::with('employeerelation')->OrderBy('id','desc')->paginate(5);
        return view('Backend.attendance.attendanceform',compact('attendance'));
    }
    // public function form(){
    //     $employees=Employee::all();
    //     return view('Backend.Attendance.attendanceform',compact('employees'));
    // }
    public function store(Request $request){

        Attendance::create([
         'checkin'=>$request->checkin,
         'name'=>$request->name,
        ]);
        return redirect()->route('view.attendance');
    }
    // delete
    public function delete($id){
        $attendance=Attendance::find($id)->delete();
        return redirect()->back();

    }
    public function single_view($id){
        $attendance=Attendance::find($id);
        return view('Backend.Attendance.view',compact('attendance'));
    }
    // public function edit($id){
    //     $employees=Employee::all();
    //     $attendance=Attendance::find($id);
    //     return view('Backend.attendance.edit',compact('employees','attendance'));
    // }
    // public function update(Request $request,$id){
    //     $attendance=Attendance::find($id);
    //     $attendance->update([
    //         'employee_name'=>$request->employee_name,
    //         'login_date'=>$request->login_date,
    //         'logout_date'=>$request->logout_date,
    //         'time'=>$request->time,


    //     ]);
    //     return redirect()->route('view.attendance');
    // }
    public function checkattendance (){
        $attendance=Attendance::OrderBy('id','desc')->paginate(5);
        return view('Backend.Attendance.checkin',compact('attendance'));
    }
    public function checkoutattendance(){

        return redirect()->route('view.attendance');
    }
}
