@extends('Backend.master')
@section('backend_content')
<label for="string">Title</label>
        <input  id="string"type="text" class="form-control" value="{{$holidays->title}}" readonly>
        <label for="text2">Holiday date</label>
        <input  id="text2"type="date" class="form-control"value="{{$holidays->holiday_date}}" readonly>
        <label for="text3">day</label>
        <input  id="text3"type="number" class="form-control"value="{{$holidays->day}}" readonly>
@endsection
