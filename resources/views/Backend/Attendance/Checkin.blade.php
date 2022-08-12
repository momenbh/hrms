@extends('Backend.master')
@section('backend_content')
<div>
    <div class="container">
        <h1>Attendance List</h1>
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
{{$attendance->links()}}

@endsection
