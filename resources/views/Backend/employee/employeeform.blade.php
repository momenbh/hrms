@extends('Backend.master')
@section('backend_content')
<div>
<form action="{{route('store.employee')}}" method="POST">
    @csrf
    <label for="name">Employee Name</label>
    <input  id="name"type="text" class="form-control" name="employee_name">
    <label for="number">Phone Number </label>
    <input  id="number"type="tel" class="form-control" name="phone_number">
    <label for="email">Employee Email</label>
    <input  id="email"type="email" class="form-control" name="employee_email">
    <label for="date">Date OF birth</label>
    <input  id="date"type="date" class="form-control" name="date_of_birth">
    <label for="integer">Age</label>
    <input  id="integer"type="number" class="form-control" name="age" min="1" max="50">
    <select name="department" id="">
        <option value="">Select Department</option>
        @foreach ($department as $data)
            <option value="{{$data->id}}">{{$data->department_name}}</option>
        @endforeach
    </select>
    <button class="btn btn-primary" type="submit">create</button>


</form>

</div>
@endsection

