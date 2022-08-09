@extends('Backend.master')
@section('backend_content')

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


   <div class="container">
    <form action="{{route('store.attendance')}}" method="POST">
        @csrf
        <h1>Name: {{auth()->user()->name}}</h1>
        <input  id="date" class="form-control" value="{{auth()->user()->id}}" name="user_id" hidden >
        <input  id="date" class="form-control" value="{{auth()->user()->name}}" name="name" hidden >

         <select name="status" class="form-control form-control-sm mt-2" hidden>
            <option value="present">Present</option>
          </select>

       <button   type='submit'class="btn btn-success mt-2">Check In</button>
    </form>
   </div>

    {{-- <div class="continer">

      <form action="{{route('checkout.attendance')}}">
        @csrf
        <h1>Name: {{auth()->user()->name}}</h1>

        <input  id="date" class="form-control" value="{{auth()->user()->name}}" name="name" hidden >
        <input  id="date" class="form-control" value="0" name="checkout" hidden >
        <a href="{{route('checkout.attendance')}}" class="btn btn-primary">Checkout</a>


      </form>
    </div> --}}

@endsection
