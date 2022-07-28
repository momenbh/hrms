@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('update.employee',$employees->id)}}" method="POST">
        @csrf
        <label for="name">Employee Name </label>
    <input  id="name"type="text" class="form-control" name="employee_name" value="{{$employees->employee_name}}">
    <label for="number">Phone Number</label>
    <input  id="number"type="text" class="form-control" name="phone_number" value="{{$employees->phone_number}}">
    <label for="email">Employee Email</label>
    <input  id="email"type="email" class="form-control" name="employee_email" value="{{$employees->employee_email}}">
    <label for="date">Date OF birth</label>
    <input  id="date"type="date" class="form-control" name="date_of_birth" value="{{$employees->date_of_birth}}">
    <label for="integer">Age</label>
    <input  id="integer"type="number" class="form-control" name="age"  min="1" max="50" value="{{$employees->age}}">
    <select name="department" id="">
        <option value="">Select Department</option>
        @foreach ($department as $data)
            <option value="{{$data->id}}">{{$data->department_name}}</option>
        @endforeach
    </select>
    <select name="designation" id="">
        <option value="">Select designation</option>
        @foreach ($designation as $data)
            <option value="{{$data->id}}">{{$data->designation}}</option>
        @endforeach
    </select>
    <button class="btn btn-primary" type="submit">Submit</button>

    </form>
</div>
@endsection
