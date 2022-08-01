@extends('Backend.master')
@section('backend_content')
<form action="{{route('update.attendance',$attendance->id)}}" method="POST">
    @csrf
    <label for="">Employee Name</label>
    <select id="name" class="form-select" aria-label="Default select example" name="employee_name" value="{{$attendance->employee_name}}">
        <option selected>select Employee</option>

        @foreach ($employees as $data)
            <option value="{{$data->id}}">{{$data->employee_name}}</option>
        @endforeach
      </select>
      <br>
    <label for="date">Login_date</label>
    <input  id="date"type="date" class="form-control" name="login_date" value="{{$attendance->login_date}}">
    <label for="date">Logout_date</label>
    <input  id="date"type="date" class="form-control" name="logout_date" value="{{$attendance->logout_date}}">
    <label for="time">time</label>
    <input  id="time"type="time" class="form-control" name="time" value="{{$attendance->time}}">
    <button type="submit" class="btn btn-primary">submit</button>
</form>
@endsection
