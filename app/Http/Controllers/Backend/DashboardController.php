<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use App\Models\Leave;
use App\Models\Notice;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailController;


class DashboardController extends Controller
{
    public function index(){
        $admins = Admin::all();
        $department=Department::all();
        $designation=Designation::all();
        $employees=Employee::all();
        $leave=Leave::all();
        $attendance=Attendance::all();
        $notice=Notice::all();
        return view('Backend.dashboard.dashboard', compact('admins','department','designation','employees','leave','attendance','notice'));

    }
    public function dashboard(){
        return view('Backend.dashboard.employeedashboard');
    }

    public function mail()
    {
        return view('Backend.mail.create');
    }

    public function store(Request $request)
    {
        $data = [
            'subject' =>$request->subject,
            'email' => $request->email,
            'reson' => $request->reson,
            'name' => auth()->user()->name,
        ];
        // dd($data);

         Mail::to('admin@gmail.com')->send(new \App\Mail\MailController($data));
   
        return redirect()->route('dashboard');
    }
}
