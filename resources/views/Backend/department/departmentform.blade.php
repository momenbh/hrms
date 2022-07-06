@extends('Backend.master')
@section('backend_content')
<div>
<form action="{{route('store.department')}}" method="POST">
    @csrf
    <label for="name">Department Name</label>
    <input   id="name"type="text" class="form-control" name='department_name'>

    <label for="type">Department Type</label>
    <input  id="type" type="text" class="form-control" name='department_type'>

    <label for="document">Department Documentation</label>
    <input  id="document"type="string" class="form-control" name='department_documentation'>

    <label for="email">Department Email</label>
    <input  id="email"type="email" class="form-control" name='department_email'>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection
