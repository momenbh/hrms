@extends('Backend.master')
@section('backend_content')

<div class="continer m-5 ">


    <div>
        {{-- @dd($attendance) --}} 
                <a class="btn btn-success" href="{{route('view.attendance')}}">checkIn</a> 
    

     <div class="mt-2">

        {{-- <a class="btn btn-warning" href="{{route('check.attendance',Auth()->user()->id)}}">CheckOut</a> --}}
    </div>
</div>

@endsection
