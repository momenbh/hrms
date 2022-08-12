@extends('Backend.master')
@section('backend_content')
<div class="container">
    <h1>Name: {{auth()->user()->name}}</h1>
<form action="{{route('checkout.attendance',Auth()->user()->id)}}" method="POST">

    @csrf

    
    <button   type='submit'class="btn btn-warning mt-2">CheckOut</button>
</form>
</div>

@endsection
