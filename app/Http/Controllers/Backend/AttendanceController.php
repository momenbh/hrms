<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Attribute;
use Illuminate\Support\Facades\Auth;
// use Brian2694\Toastr\Facades\Toastr;

class AttendanceController extends Controller
{
    // public function pages(){
    //     $attendance=Attendance::all();

    //     return view('Backend.Attendance.attendance_page',compact('attendance'));
    // }
    public function view(){
        $attendance=Attendance::OrderBy('id','desc')->paginate(5);
// dd($attendance);
        return view('Backend.attendance.attendanceform',compact('attendance'));
    }

    public function store(){

        //check user has check in
        $attendance=Attendance::whereDate('created_at',date('Y-m-d'))
                        ->where('user_id',auth()->user()->id)->first();

        
        if($attendance)
        {

            Toastr::error('checkIn already done.', 'success');
            return redirect()->back();

        }

        Attendance::create([
         'user_id'=>auth()->user()->id,
         'name'=>auth()->user()->name,
         'status'=>'present',
        ]);
        Toastr::success('checkIn done', 'success');

        return redirect()->back();
        // return redirect()->route('check.attendance');
    }
    // delete
    // public function delete($id){
    //     $attendance=Attendance::find($id)->delete();
    //     return redirect()->back();

    // }
    // public function single_view($id){
    //     $attendance=Attendance::find($id);
    //     return view('Backend.Attendance.view',compact('attendance'));
    // }
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
    public function checkout ($id){
        // dd($request);
        // $attendance=Attendance::find($id);
        // $attendance=Attendance::first('User_id',$id);

       
        // dd($attendance);
       
            Attendance::where('user_id', Auth::id())->update([
                // 'outtime'=>$request->outtime,
                'outtime'=>Carbon::now(),
            ]);
            Toastr::success('checkOut done', 'success');
           return redirect()->route('view.attendance');
        
    }
    

}
