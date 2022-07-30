@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('update.holiday',$holidays->id)}}" method="POST">
        @csrf
        <label for="string">Title</label>
        <input  id="string"type="text" class="form-control"name="title" value="{{$holidays->title}}">
        <label for="text2">Holiday date</label>
        <input  id="text2"type="date" class="form-control"name="holiday_date" value="{{$holidays->holiday_date}}">
        <label for="text3">day</label>
        <input  id="text3"type="number" class="form-control"name="day" min="1" value="{{$holidays->day}}">
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
