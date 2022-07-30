<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class Noticecontroller extends Controller
{
    public function view(){
        $notice=Notice::OrderBy('id','desc')->paginate(5);
        return view('Backend.notice.notice',compact('notice'));
    }
    public function form(){
        return view('Backend.notice.noticeform');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
         'new_notice'=>'required|string',
         'govement_notice'=>'required|string',
         'department_notice'=>'required|string',
         'holiday_notice'=>'required|string',
         'payroll_notice'=>'required|string',
         'notice_time'=>'required|string',


        ]);
        Notice::create([
         'new_notice'=>$request->new_notice,
         'govement_notice'=>$request->govement_notice,
         'department_notice'=>$request->department_notice,
         'holiday_notice'=>$request->holiday_notice,
         'payroll_notice'=>$request->payroll_notice,
         'notice_time'=>$request->notice_time,
        ]);
        return redirect()->route('view.notice');
    }

    //Delete
    public function delete($id){
        $notice=Notice::find($id)->delete();
        return redirect()->back();
    }

    //Single view
    public function single_view($id){
        $notice=Notice::find($id);
        return view('Backend.notice.single', compact('notice'));
    }
    public function edit($id){
        $notice=Notice::find($id);
        return view('Backend.notice.edit',compact('notice'));
    }
    public function update(Request $request,$id){
        $notice=Notice::find($id);
        $notice->update([
            'new_notice'=>$request->new_notice,
            'govement_notice'=>$request->govement_notice,
            'department_notice'=>$request->department_notice,
            'holiday_notice'=>$request->holiday_notice,
            'payroll_notice'=>$request->payroll_notice,
            'notice_time'=>$request->notice_time,
        ]);
        return redirect()->route('view.notice');
    }
}
