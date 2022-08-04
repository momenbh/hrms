@extends('Backend.master')
@section('backend_content')
<div>

        <label for="text">Name</label>
        <input  id="text"type="text" class="form-control" name="name" value="{{$type->name}}" readonly>
        <label for="text">status</label>
        <input  id="text"type="text" class="form-control" value="{{$type->status}}" readonly>
        <label for="number">Balance</label>
        <input  id="number"type="number" class="form-control" name="balance" value="{{$type->balance}}" readonly>

</div>

@endsection
