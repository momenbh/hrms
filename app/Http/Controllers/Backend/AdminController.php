<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function view(){
        $admins=Admin::OrderBy('id','desc')->paginate(5);
        return view('Backend.admin.admin',compact('admins'));
    }
    public function form(){
        return view('Backend.Admin.adminform');
    }
    public function store(Request $request){
        // dd($request->all());

        Admin::create([

            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'admin_email'=>$request->admin_email,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,


        ]);
        return redirect()->route('view.admin');
    }
    public function delete($id){
        $admins=Admin::find($id)->delete();
        return redirect()->back();
    }
    public function views($id){
        $admins=Admin::find($id);
        return view('Backend.admin.adminview',compact('admins'));
    }
}
