<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function view(){
        $holidays=Holiday::OrderBy('id','desc')->paginate(5);
        return view('Backend.holiday.holiday',compact('holidays'));
    }
    public function form()
    {

    return view('Backend.Holiday.holidayform');
}
public function store(Request $request){
    // dd($request->all());
    $request->validate([
       'title'=>'required|string',
       'holiday_date'=>'required|string',
       'day'=>'required|integer',
   ]);

    Holiday::create([
       'title'=>$request->title,
       'holiday_date'=>$request->holiday_date,
       'day'=>$request->day,

    ]);
    return redirect()->route('view.holiday');
}
public function delete($id)
{

    $holidays=Holiday::find($id)->delete();
    return redirect()->back();
}
public function views($id){
    $holidays=Holiday::find($id);
    return view('Backend.Holiday.view',compact('holidays'));

}
public function edit($id){
    $holidays=Holiday::find($id);
    return view('Backend.Holiday.edit',compact('holidays'));
}
public function update(Request $request,$id){
    $holidays=Holiday::find($id);
    $holidays->update([

        'title'=>$request->title,
       'holiday_date'=>$request->holiday_date,
       'day'=>$request->day,

    ]);
    return redirect()->route('view.holiday');
}


}

