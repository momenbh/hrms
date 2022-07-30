@extends('Backend.master')
@section('backend_content')
<div>

        <form action="{{route('update.notice',$notice->id)}}" method="POST">
            @csrf
            <label for="text1">New notice</label>
            <input  id="text1" type="text" class="form-control" name='new_notice' value="{{$notice->new_notice}}">
            <label for="text2">Govement notice</label>
            <input  id="text2" type="text" class="form-control" name='govement_notice' value="{{$notice->govement_notice}}">
            <label for="text3">Department notice</label>
            <input  id="text3" type="text" class="form-control" name='department_notice' value="{{$notice->department_notice}}">
            <label for="text4">Holiday notice</label>
            <input  id="text4" type="text" class="form-control" name='holiday_notice' value="{{$notice->holiday_notice}}">
            <label for="text5">Payroll notice</label>
            <input  id="text5" type="text" class="form-control" name='payroll_notice' value="{{$notice->payroll_notice}}">
            <label for="time">Notice time</label>
            <input  id="time" type="time" class="form-control" name='notice_time' value="{{$notice->notice_time}}">
            <button type="submit" class="btn btn-primary">submit</button>
         </form>

</div>
@endsection
