@extends('Backend.master')
@section('backend_content')
<div class="container">
<form action="{{route('checkout.attendance',Auth()->user()->id)}}" method="POST">

    @csrf
        <label for="time">Time</label>
        <input  type="time" class="form-control" name='outtime' required>
    </div>
    <button   type='submit'class="btn btn-success mt-2">Submit</button>
</form>
</div>

@endsection
