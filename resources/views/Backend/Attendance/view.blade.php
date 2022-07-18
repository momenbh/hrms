@extends('Backend.master')
@section('backend_content')


        <label for="date">Login_date</label>
        <input  id="date"type="date" class="form-control" value="{{$attendance->login_date}}" readonly >
        <label for="date">Logout_date</label>
        <input  id="date"type="date" class="form-control" value="{{$attendance->logout_date}}" readonly>
        <label for="time">time</label>
        <input  id="time"type="time" class="form-control"  value="{{$attendance->time}}" readonly>

@endsection

