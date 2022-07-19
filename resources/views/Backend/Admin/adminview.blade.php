@extends('Backend.master')
@section('backend_content')
<label for="name">Admin Name</label>
<input id="name" type="text" class="form-control" value="{{$admins->admin_name}}" readonly>
<label for="number">Phone Number</label>
<input id="number" type="text" class="form-control" value="{{$admins->phone_number}}" readonly >
<label for="email">Email</label>
<input id="email" type="email" class="form-control" value="{{$admins->email}}" readonly>
<label for="date">Date Of Birth</label>
<input id="date" type="date" class="form-control" value="{{$admins->date_of_birth}}" readonly>
<label for="integer">Age</label>
<input id="integer" type="number" class="form-control" value="{{$admins->age}}" readonly>
@endsection
