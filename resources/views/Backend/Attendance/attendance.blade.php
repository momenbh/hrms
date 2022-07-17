@extends('Backend.master')
@section('backend_content')
<h1>Give Attendance</h1>
<a href="{{route('form.attendance')}}" class="btn btn-primary">submit</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">login_date</th>
                <th scope="col">logout_date</th>
                <th scope="col">time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendance as $data )


            <tr>
                <td scope="col">{{$data->id}}</td>
                <td scope="col">{{$data->login_date}}</td>
                <td scope="col">{{$data->logout_date}}</td>
                <td scope="col">{{$data->time}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-success" href="">View</a>
                    <a  class="btn btn-danger" href="">Delete</a>

                </td>


            </tr>
            @endforeach
        </tbody>

    </table>
</div>
{{$attendance->links()}}
@endsection
