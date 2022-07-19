<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;




class DesignationController extends Controller
{
    public function view(){
        $designation=Designation::OrderBy('id','desc')->paginate(5);
        return view('Backend.designation.designation',compact('designation'));
    }
    public function form(){
        return view('Backend.designation.designationform');
    }
    public function store(Request $request){

        $request->validate([
            'designation'=>'required|string',
            'status'=>'required|string',

        ]);
        // dd($request->all());
        Designation::create([
           'designation'=>$request->designation,
           'status'=>$request->status,
        ]);
        return redirect()->route('view.designation');
    }
    public function delete($id){
        $designation=Designation::find($id)->delete();
        return redirect()->back();
    }
    public function views($id){
        $designation=Designation::find($id);
        return view('Backend.designation.designationview',compact('designation'));
    }
}
