@extends('Backend.master')
@section('backend_content')
<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('store.department')}}" method="POST">
    @csrf
    <label for="name">Department Name*</label>
    <input   id="name"type="text" class="form-control" name='department_name' required>

    <label for="type">phone number*</label>
    <input  id="type" type="text" class="form-control" name='phone_number' required>

    <label for="document">Department details</label>
    <input  id="document"type="string" class="form-control" name='department_details' required>

    <label for="email">Department Email</label>
    <input  id="email"type="email" class="form-control" name='department_email' required>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection
