<?php

namespace App\Http\Controllers\Backend;
use App\Models\Type;
use App\Models\Leave;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Leavecontroller extends Controller
{
    public function view(){

        $leaves=Leave::OrderBy('id','desc')->paginate(5);
        return view('Backend.leave.leave',compact('leaves'));
    }
    public function form(){
        $employees=Employee::all();
        $types=Type::all();
        return view('Backend.leave.leaveform',compact('types','employees'));

    }
    public function store(Request $request){

            $from_date =$request->from_date;
            $to_date =$request->to_date;

            $from_date = strtotime($from_date);
            $to_date = strtotime($to_date);

            $days =($to_date-$from_date)/(60*60*24)+1;
           
        Leave::create([
        'employee_name'=>auth()->user()->name,
          'leave_type'=>$request->leave_type,
          'from_date'=>$request->from_date,
          'to_date'=>$request->to_date,
          'reason'=>$request->reason,
          'days'=>$days,
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

        $leave=Leave::find($id);
        return view('Backend.leave.edit',compact('leave'));

    }
    public function update(Request $request,$id){
        $leave=Leave::find($id);
        $leave->update([
            'reason'=>$request->reason,
          'days'=>$request->days,
          'to_date'=>$request->to_date,
          'from_date'=>$request->from_date,

        ]);
        return redirect()->route('view.leave');
    }
    public function list(){

        $leaves=Leave::with('leavetypeId')->OrderBy('id','desc')->paginate(5);
        // dd($leaves);
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
public function status(Request $request,$id){
    $leaves=Leave::find($id);
    // dd($leaves);
    $leaves->update([
     'status'=>$request->status,
    ]);
    return redirect()->back();
}
public function report(){
    $leaves=Leave::OrderBy('id','desc')->paginate(5);
    return view('Backend.leave.leavereport',compact('leaves'));
}


}
