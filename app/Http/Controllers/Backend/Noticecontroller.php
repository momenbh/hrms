<?php

namespace App\Http\Controllers\Backend;

use App\Models\Notice;
use App\Models\Holiday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
         'notice_name'=>'required|string',
         'notice_details'=>'required|string',
        ]);
        Notice::create([
            'notice_name'=>$request->notice_name,
            'notice_details'=>$request->notice_details,
            
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
            'notice_name'=>$request->notice_name,
            'notice_details'=>$request->notice_details,
            
        ]);
        return redirect()->route('view.notice');
    }
    public function list(){
        $notice=Notice::OrderBy('id','desc')->paginate(5);
        return view('Backend.notice.noticelist',compact('notice'));
        return redirect()->back();
    }
}
