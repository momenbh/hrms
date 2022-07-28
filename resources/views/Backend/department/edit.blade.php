@extends('Backend.master')
@section('backend_content')
<h1>Department Edit</h1>
<div>
    <form action="{{route('update.department',$department->id)}}" method="POST">
        @csrf
        <label for="name">Department Name</label>
        <input   id="name"type="text" class="form-control" value="{{$department->department_name}}" name="department_name">

        <label for="type">phone number</label>
        <input  id="type" type="text" class="form-control" value="{{$department->phone_number}}" name="phone_number">

        <label for="document">Department details</label>
        <input  id="document"type="string" class="form-control" value="{{$department->department_details}}" name="department_details">

        <label for="email">Department Email</label>
        <input  id="email"type="email" class="form-control" value="{{$department->department_email}}" name="department_email">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
