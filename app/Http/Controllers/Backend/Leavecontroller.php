<?php

namespace App\Http\Controllers\Backend;

use App\Models\Leave;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
    public function delete($id){
        $leave=Leave::find($id)->delete();
        return redirect()->back();
    }
    public function views($id){
        $leave=Leave::find($id);
        return view('Backend.leave.view',compact('leave'));
    }

}
