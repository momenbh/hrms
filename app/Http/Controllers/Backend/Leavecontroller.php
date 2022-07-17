<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
// use App\Models\Employee;

class Leavecontroller extends Controller
{
    public function view(){
        $leave=Leave::OrderBy('id','desc')->paginate(5);
        return view('Backend.leave.leave',compact('leave'));
    }
    public function form(){

        return view('Backend.leave.leaveform');
    }
    public function store(Request $request){
        $request->validate([
            'reason'=>'required|string',
            'days'=>'required|string',
            'to_date'=>'required|string',
            'from_date'=>'required|string',

        ]);
        // dd($request->all());
        Leave::create([
          'reason'=>$request->reason,
          'days'=>$request->days,
          'to_date'=>$request->to_date,
          'from_date'=>$request->from_date,
        ]);

        return redirect()->route('view.leave');
    }

}
