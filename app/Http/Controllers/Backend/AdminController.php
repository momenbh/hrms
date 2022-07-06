<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function view(){
        $admins=Admin::paginate(5);
        return view('Backend.admin.admin',compact('admins'));
    }
    public function form(){
        return view('Backend.Admin.adminform');
    }
    public function store(Request $request){
        // dd($request->all());

        Admin::create([

            'admin_name'=>$request->admin_name,
            'phone_number'=>$request->phone_number,
            'admin_email'=>$request->admin_email,
            'date_of_birth'=>$request->date_of_birth,
            'age'=>$request->age,


        ]);
        return redirect()->route('view.admin');
    }
}
