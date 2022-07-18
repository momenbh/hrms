@extends('Backend.master')
@section('backend_content')
        <label for="text1">New notice</label>
        <input  id="text1" type="text" class="form-control" value="{{$notice->new_notice}}" readonly>
        <label for="text2">Govement notice</label>
        <input  id="text2" type="text" class="form-control" value="{{$notice->govement_notice}}" readonly>
        <label for="text3">Department notice</label>
        <input  id="text3" type="text" class="form-control" value="{{$notice->department_notice}}" readonly>
        <label for="text4">Holiday notice</label>
        <input  id="text4" type="text" class="form-control" value="{{$notice->holiday_notice}}" readonly>
        <label for="text5">Payroll notice</label>
        <input  id="text5" type="text" class="form-control" value="{{$notice->payroll_notice}}" readonly>
        <label for="time">Notice time</label>
        <input  id="time" type="time" class="form-control" value="{{$notice->notice_time}}" readonly>

@endsection
