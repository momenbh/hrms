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
        @php
        use App\Models\Attendance;
          $emp_attendance=Attendance::where('user_id',auth()->user()->id);

            $checkIn=$emp_attendance->whereDate('created_at',date('Y-m-d'))->first();
            $checkOut=$emp_attendance->whereDate('created_at',date('Y-m-d'))->where('outtime','!=',null)->first();
        @endphp
@if(!$checkIn)
       <a href='{{route('store.attendance')}}' class="btn btn-success mt-2">Check In</a>
  @endif  
   </div>

   <div class="mt-2">

@if(!$checkOut)
        <a class="btn btn-warning" style="margin-left:15px" href="{{route('checkout.attendance',Auth()->user()->id)}}">CheckOut</a>
@endif

    </div>
   <div>
    <div>
        <div>
            <div class="container">
                <h1>Attendance Report</h1>
            </div>
            <table class="table">
              <thead>
                <tr>
                    <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">CheckIn Time</th>
                        <th scope="col">CheckOut Time</th>
                        <th scope="col">Status</th>
                        {{-- <th scope='col'>Action</th> --}}
        
                </tr>
              </thead>
              <tbody>
                <tr>
                {{-- @dd($attendance) --}}
                    @foreach ($attendance as $key=>$data )
        
                    <td scope="col">{{$key+1}}</td>
                    <td scope="col">{{$data->name}}</td>
                    <td scope="col">{{$data->created_at}}</td>
        
                    <td scope="col">{{$data->outtime}} </td>
                    <td scope="col">{{$data->status}}</td>
                    <td scope="col">
                        {{-- <a  class="btn btn-danger" href="{{route('delete.attendance',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a> --}}
        
                    </td>
        
                </tr>
                @endforeach
        
              </tbody>
            </table>
        </div>
    </div>

    {{$attendance->links()}}
 

@endsection
