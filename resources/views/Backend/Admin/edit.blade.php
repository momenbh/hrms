@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('update.admin',$admins->id)}}" method="POST">
        @csrf
        <label for="name">Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{$admins->name}}">
    <label for="number">Phone Number</label>
    <input id="number" type="text" class="form-control" name="phone_number" value="{{$admins->phone_number}}">
    <label for="email">Email</label>
    <input id="email" type="email" class="form-control" name="admin_email" value="{{$admins->admin_email}}">
    <label for="date">Date Of Birth</label>
    <input id="date" type="date" class="form-control" name="date_of_birth" value="{{$admins->date_of_birth}}">
    <label for="integer">Age</label>
    <input id="integer" type="number" class="form-control" name="age" value="{{$admins->age}}">
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@endsection
