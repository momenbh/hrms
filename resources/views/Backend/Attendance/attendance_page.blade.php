@extends('Backend.master')
@section('backend_content')

<div class="continer m-5 ">
    <div>
                <a class="btn btn-success" href="{{route('view.attendance')}}">checkIn</a>
    </div >
    <div class="mt-2">
                <a class="btn btn-warning" href="">CheckOut</a>
    </div>
</div>

@endsection