@extends('Backend.master')
@section('backend_content')
        <label for="text">Designation</label>
        <input  id="text"type="text" class="form-control" value="{{$designation->designation}}" readonly>
        <label for="text">status</label>
        <input  id="text"type="text" class="form-control" value="{{$designation->status}}" readonly>
@endsection
