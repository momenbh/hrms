@extends('Backend.master')
@section('backend_content')
<div>
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
    </div>

    <form action="{{route('store.attendance')}}" method="POST">
        @csrf
        <h1>Name: {{auth()->user()->name}}</h1>

        <input  id="date" class="form-control" value="{{auth()->user()->name}}" name="name" hidden >
        <input  id="date" class="form-control" value="1" name="checkin" hidden >

       <a href="{{route('checkin.attendance')}}"  type='submit'class="btn btn-success">CheckIn</a>
    </form>
    <div class="continer">

    <form action="{{route('checkout.attendance')}}">
        @csrf
        <h1>Name: {{auth()->user()->name}}</h1>

        <input  id="date" class="form-control" value="{{auth()->user()->name}}" name="name" hidden >
        <input  id="date" class="form-control" value="0" name="checkout" hidden >


    </form>
    </div>
</div>
@endsection
