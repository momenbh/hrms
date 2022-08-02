<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use App\Models\Leave;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $admins = Admin::all();
        $department=Department::all();
        $designation=Designation::all();
        $employees=Employee::all();
        $leave=Leave::all();
        $attendance=Attendance::all();
        return view('Backend.dashboard.dashboard', compact('admins','department','designation','employees','leave','attendance'));

    }
    public function dashboard(){
        return view('Backend.dashboard.employeedashboard');
    }
}
