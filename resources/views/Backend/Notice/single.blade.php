@extends('Backend.master')
@section('backend_content')
       <div style="padding: 20px">
        <label for="text1">Notice Name</label>
        <input  id="text1" type="text" class="form-control" value="{{$notice->notice_name}}" readonly>
        <label for="text2">Notice Details</label>
        <input  id="text2" type="textbox" class="form-control" value="{{$notice->notice_details}}" readonly>
        <label for="time">Time</label>
        <input  id="time" type="text" class="form-control" value="{{$notice->created_at->diffForHumans() }}" readonly>
       </div>

@endsection
