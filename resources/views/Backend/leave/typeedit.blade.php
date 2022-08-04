@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('typeupdate.leave',$type->id)}}" method="POST">
        @csrf
        <label for="text">Name</label>
        <input  id="text"type="text" class="form-control" name="name" value="{{$type->name}}">
        <label for="text">status</label>
        <select name="status" id="" class="form-control">
            <option @if($type->status == 'active') selected @endif value="active">Active</option>
            <option @if($type->status == 'inactive') selected @endif value="inactive">Inactive</option>
        </select>
        <label for="number">Balance</label>
        <input  id="number"type="number" class="form-control" name="balance" value="{{$type->balance}}">
        <button type="submit" class="btn btn-primary">create</button>
    </form>
</div>

@endsection
