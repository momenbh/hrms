<?php

namespace App\Http\Controllers\Backend;

use App\Models\Payroll;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class payrollcontroller extends Controller
{
    public function view(){
        $payrolls=Payroll::with('employeerelation')->OrderBy('id','desc')->paginate(5);
        return view('Backend.payroll.payroll',compact('payrolls'));
    }
    public function form(){
        $employees = Employee::all();
        return view('Backend.Payroll.payrollform',compact('employees'));


    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'employee_name'=>'required|string',
            'payment'=>'required|string',
            'basic_payment'=>'required|string',
            'overtime_payment'=>'required|string',
            'bouns'=>'required|string',
            'date'=>'required|date',


        ]);
        Payroll::create([
            'payment'=>$request->payment,
            'employee_name'=>$request->employee_name,
            'basic_payment'=>$request->basic_payment,
            'overtime_payment'=>$request->overtime_payment,
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


}
