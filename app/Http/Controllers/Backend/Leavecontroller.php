<?php

namespace App\Http\Controllers\Backend;

use App\Models\Leave;
use App\Models\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Leavecontroller extends Controller
{
    public function view(){

        $leave=Leave::with('employeeId')->OrderBy('id','desc')->paginate(5);
        // dd($leave);
        return view('Backend.leave.leave',compact('leave'));
    }
    public function form(){

        $employees = Employee::all();
        return view('Backend.leave.leaveform', compact('employees'));
    }
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'reason'=>'required|string',
            'employee_name'=>'required|string',
            'days'=>'required|string',
            'to_date'=>'required|string',
            'from_date'=>'required|string',

        ]);
        // dd($request->all());
        Leave::create([
          'reason'=>$request->reason,
          'days'=>$request->days,
          'employee_name'=>$request->employee_name,
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
    public function edit($id){
        $employees = Employee::all();
        $leave=Leave::find($id);
        return view('Backend.leave.edit',compact('employees','leave'));

    }
    public function update(Request $request,$id){
        $leave=Leave::find($id);
        $leave->update([
            'reason'=>$request->reason,
          'days'=>$request->days,
          'employee_name'=>$request->employee_name,
          'to_date'=>$request->to_date,
          'from_date'=>$request->from_date,

        ]);
        return redirect()->route('view.leave');
    }

}
