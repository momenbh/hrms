<?php

namespace App\Http\Controllers\Backend;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function view(){
        $attendance=Attendance::OrderBy('id','desc')->paginate(5);
        return view('Backend.attendance.attendance',compact('attendance'));
    }
    public function form(){
        return view('Backend.Attendance.attendanceform');
    }
    public function store(Request $request){
        $request->validate([
            'login_date'=>'required|string',
            'logout_date'=>'required|string',
            'time'=>'required|string',


        ]);
        Attendance::create([
          'login_date'=>$request->login_date,
          'logout_date'=>$request->logout_date,
          'time'=>$request->time,

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
}
