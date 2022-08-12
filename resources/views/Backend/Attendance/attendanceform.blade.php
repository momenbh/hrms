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
    
        <h1>Name: {{auth()->user()->name}}</h1>
        

       <a href='{{route('store.attendance')}}' class="btn btn-success mt-2">Check In</a>
    
   </div>

   <div class="mt-2">

    <a class="btn btn-warning" href="{{route('check.attendance',Auth()->user()->id)}}">CheckOut</a>
</div>
   <div>


 

@endsection
