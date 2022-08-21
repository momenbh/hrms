<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Payroll;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class payrollcontroller extends Controller
{
    public function view(){
        $payrolls=Payroll::with('user')->OrderBy('id','desc')->paginate(5);
        return view('Backend.payroll.payroll',compact('payrolls'));
    }
    public function form(){
        $employees = User::all();
        return view('Backend.Payroll.payrollform',compact('employees'));


    }
    public function store(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'employee_name'=>'required|string',
        //     'payment'=>'required|string',
        //     'basic_payment'=>'required|string',
        //     'date'=>'required|date',


        // ]);
        Payroll::create([
            'salary'=>$request->salary,
            'employee_id'=>$request->employee_id,
            'basic_salary'=>$request->basic_salary,
            'overtime_salary'=>$request->overtime_salary,
            'bouns'=>$request->bouns,
            'date'=>$request->date,


        ]);

        return redirect()->route('view.payroll');

    }
    public function delete($id){
        $payrolls=Payroll::find($id)->delete();
        return redirect()->back();

    }
    public function views($id){
        $payrolls=Payroll::find($id);
        return view('Backend.payroll.view',compact('payrolls'));
    }
 public function edit($id){
    $employees = User::all();
    $payrolls=Payroll::find($id);
    return view('Backend.payroll.edit',compact('employees','payrolls'));

 }
 public function update(Request $request,$id){
    // dd($request->all());
    $payrolls=Payroll::find($id);
    $payrolls->update([
        'salary'=>$request->salary,
        'employee_id'=>$request->employee_id,
        'basic_salary'=>$request->basic_salary,
        'overtime_salary'=>$request->overtime_salary,
        'bouns'=>$request->bouns,
    ]);
    return redirect()->route('view.payroll');
 }
 public function status(){
    $payrolls=Payroll::where('employee_id',auth()->user()->id)->get();
    // dd($payrolls);
    return view('Backend.Payroll.payrollstatus',compact('payrolls'));
 }

}
