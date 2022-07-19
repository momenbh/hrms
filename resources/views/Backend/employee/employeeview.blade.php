@extends('Backend.master')
@section('backend_content')
<label for="name">Employee Name *</label>
<input  id="name"type="text" class="form-control" value="{{ $employees->employee_name}}" readonly>
<label for="number">Phone Number* </label>
<input  id="number"type="text" class="form-control" value="{{$employees->phone_number}}" readonly>
<label for="email">Employee Email*</label>
<input  id="email"type="email" class="form-control" value="{{$employees->employee_email}}" readonly>
<label for="date">Date OF birth</label>
<input  id="date"type="date" class="form-control" value="{{$employees->date_of_birth}}" readonly>
<label for="integer">Age</label>
<input  id="integer"type="number" class="form-control" value="{{$employees->age}}" readonly>
@endsection
