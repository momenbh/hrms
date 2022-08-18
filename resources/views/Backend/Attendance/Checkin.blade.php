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
               

        </tr>
      </thead>
      <tbody>
        <tr>
       
            @foreach ($attendance as $key=>$data )

            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->name}}</td>
            <td scope="col">{{$data->created_at}}</td>

            <td scope="col">{{$data->outtime}} </td>
            <td scope="col">{{$data->status}}</td>
            <td scope="col">
               
            </td>

        </tr>
        @endforeach

      </tbody>
    </table>
</div>
{{$attendance->links()}}

@endsection
