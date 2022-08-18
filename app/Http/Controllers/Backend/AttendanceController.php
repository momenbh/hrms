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
    
    public function view(){
        $attendance=Attendance::OrderBy('id','desc')->paginate(5);

        return view('Backend.attendance.attendanceform',compact('attendance'));
    }

    public function store(){

     
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
        
    }
    
    public function checkattendance (){

        $attendance=Attendance::OrderBy('id','desc')->paginate(5);
        
        return view('Backend.Attendance.checkin',compact('attendance'));
    }
   
    public function check($id){
        $attendance=Auth()->user()->id;
        return view('Backend.Attendance.checkout',compact('attendance'));
    }
    public function checkout ($id){
     
       
            Attendance::where('user_id', Auth::id())->update([
                
                'outtime'=>Carbon::now(),
            ]);
            Toastr::success('checkOut done', 'success');
           return redirect()->route('view.attendance');
        
    }
    

}
