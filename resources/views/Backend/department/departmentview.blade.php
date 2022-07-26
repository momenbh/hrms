@extends('Backend.master')
@section('backend_content')
<label for="name">Department Name*</label>
    <input   id="name"type="text" class="form-control" value="{{$department->department_name}}" readonly>

    <label for="type">phone number*</label>
    <input  id="type" type="text" class="form-control" value="{{$department->phone_number}}" readonly>

    <label for="document">Department details</label>
    <input  id="document"type="string" class="form-control" value="{{$department->department_details}}" readonly>

    <label for="email">Department Email</label>
    <input  id="email"type="email" class="form-control" value="{{$department->department_email}}" readonly>

@endsection
