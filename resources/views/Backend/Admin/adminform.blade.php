@extends('Backend.master')
@section('backend_content')
<form action="{{route('store.admin')}}" method="POST">
    @csrf
    <label for="name">Admin Name</label>
    <input id="name" type="text" class="form-control" name="admin_name">
    <label for="number">Phone Number</label>
    <input id="number" type="text" class="form-control" name="phone_number">
    <label for="email">Email</label>
    <input id="email" type="email" class="form-control" name="admin_email">
    <label for="date">Date Of Birth</label>
    <input id="date" type="date" class="form-control" name="date_of_birth">
    <label for="integer">Age</label>
    <input id="integer" type="number" class="form-control" name="age">
    <button class="btn btn-primary" type="submit">create</button>

</form>
@endsection
