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
                <th scope="col">date</th>
                <th scope="col">CheckIn Time</th>
                <th scope="col">CheckIn Time</th>
                <th scope="col">Status</th>

        </tr>
      </thead>
      <tbody>
        <tr>
        {{-- @dd($attendance) --}}
            @foreach ($attendance as $key=>$data )

            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->name}}</td>
            <td scope="col">{{$data->to_date}}</td>
            <td scope="col">{{$data->intime}}</td>
            <td scope="col">{{$data->outtime}}</td>
            <td scope="col">{{$data->status}}</td>

        </tr>
        @endforeach

      </tbody>
    </table>
</div>
{{$attendance->links()}}

@endsection
