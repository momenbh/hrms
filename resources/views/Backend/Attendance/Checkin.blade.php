@extends('Backend.master')
@section('backend_content')
<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">CheckIn</th>
            <th scope="col">CheckOut</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updateed_at</th>
            <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <tr>
        {{-- @dd($attendance) --}}
            @foreach ($attendance as $key=>$data )

            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->name}}</td>
            <td scope="col">{{$data->checkin}}</td>
            <td scope="col">{{$data->checkout}}</td>
            <td scope="col">{{$data->created_at}}</td>
            <td scope="col">{{$data->updated_at}}</td>
            <td scope="col">{{$data->time}}</td>
            <td scope="col">
            <a href="{{route('checkout.attendance')}}" class="btn btn-primary">Checkout</a>
            </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>
 {{$attendance->links()}}

@endsection
