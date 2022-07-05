@extends('Backend.master')
@section('backend_content')
<div>
<form action="{{route('store.department')}}" method="POST">
    @csrf
    <label for="">Department Name</label>
    <input  type="text" class="form-control" name='department_name'>

    <label for="">Department place</label>
    <input type="text" class="form-control" name='department_place'>

    <label for="">Department Documentation</label>
    <input type="text" class="form-control" name='department_documentation'>

    <label for="">Department Email</label>
    <input type="email" class="form-control" name='department_email'>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection
