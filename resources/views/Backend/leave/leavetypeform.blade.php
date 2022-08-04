@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('store.leavetype')}}" method="POST">
        @csrf
        <label for="text">Name</label>
        <input  id="text"type="text" class="form-control" name="name">
        <label for="text">status</label>
        <select name="status" id="" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <label for="number">Balance</label>
        <input  id="number"type="number" class="form-control" name="balance">
        <button type="submit" class="btn btn-primary">create</button>
    </form>
</div>

@endsection
