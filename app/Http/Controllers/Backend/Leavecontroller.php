<?php

namespace App\Http\Controllers\Backend;
use App\Models\Type;
use App\Models\Leave;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Leavecontroller extends Controller
{
    public function view(){

        // $leave=Leave::with('employeeId')->OrderBy('id','desc')->paginate(5);
        // dd($leave);
        return view('Backend.leave.leave');
    }
    public function form(){
        $types=Type::all();
        return view('Backend.leave.leaveform',compact('types'));
    }
    public function store(Request $request){
        // dd($request);
        // $request->validate([
        //     'reason'=>'required|string',
        //     'employee_name'=>'required|string',
        //     'days'=>'required|string',
        //     'to_date'=>'required|string',
        //     'from_date'=>'required|string',

        // ]);
        // dd($request->all());
        Leave::create([
          'leave_type'=>$request->leave_type,
          'from_date'=>$request->from_date,
          'to_date'=>$request->to_date,
          'reason'=>$request->reason,
        ]);

        return redirect()->route('view.leavelist');
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
    public function list(){

        $leaves=Leave::with('leavetyperelation')->OrderBy('id','desc')->paginate(5);

        return view('Backend.leave.leavelist',compact('leaves'));
        return redirect()->back();
    }
//    leave type
public function leavetype(){
    $types=Type::OrderBy('id','desc')->paginate(5);
    return view('Backend.leave.leavetype',compact('types'));
}
public function leavetypeform(){
    $types=Type::all();
    return view('Backend.leave.leavetypeform',compact('types'));
}
public function leavetypestore(Request $request){
    // dd($request);
    Type::create([
        'name'=>$request->name,
        'status'=>$request->status,
        'balance'=>$request->balance,

    ]);
    return redirect()->route('view.leavetype');
}
public function typedelete($id){
    $type=Type::find($id)->delete();
    return redirect()->back();
}
public function typeviews($id){
    $type=Type::find($id);
    return view('Backend.leave.typeview',compact('type'));
}
public function typeedit($id){
    $type=Type::find($id);
    return view('Backend.leave.typeedit',compact('type'));

}
public function typeupdate(Request $request,$id){
    $type=Type::find($id);
    $type->update([
        'name'=>$request->name,
        'status'=>$request->status,
        'balance'=>$request->balance,


    ]);
    return redirect()->route('view.leavetype');
}

}
