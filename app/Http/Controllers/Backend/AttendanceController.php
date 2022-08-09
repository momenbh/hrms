<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\promise\Create;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function pages(){
        $attendance=Attendance::all();
        return view('Backend.Attendance.attendance_page',compact('attendance'));
    }
    public function view(){
        $attendance=Attendance::with('employeerelation')->OrderBy('id','desc')->paginate(5);
// dd($attendance);
        return view('Backend.attendance.attendanceform',compact('attendance'));
    }

    public function store(Request $request){

        Attendance::create([
         'user_id'=>$request->user_id,
         'name'=>$request->name,
         'to_date'=>$request->to_date,
         'intime'=>$request->intime,
         'status'=>$request->status,

        ]);
        return redirect()->back();
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
    // public function check(Request $request,$id){
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
        // dd($attendance);
        return view('Backend.Attendance.checkin',compact('attendance'));
    }
    // public function checkoutattendance(){

    //     return redirect()->route('view.attendance');
    // }
    public function check($id){
        $attendance=Auth()->user()->id;

        return view('Backend.Attendance.checkout',compact('attendance'));
    }
    public function checkout (Request $request,$id){
        // dd($request);
        // $attendance=Attendance::find($id);
        // $attendance=Attendance::first('User_id',$id);

       Attendance::where('user_id', Auth::id())->update([
            'outtime'=>$request->outtime,
        ]);
        // dd($attendance);
        return redirect()->back();
    }

}
