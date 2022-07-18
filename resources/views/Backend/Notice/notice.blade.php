@extends('Backend.master')
@section('backend_content')
<h1>View Notice</h1>
<a href="{{route('form.notice')}}" class="btn btn-primary">Create</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">New Notice</th>
                <th scope="col">Govement Notice</th>
                <th scope="col">Department Notice</th>
                <th scope="col">Holiday Notice</th>
                <th scope="col">Payroll Notice</th>
                <th scope="col">Notice time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $notice as $data )


            <tr>
                <td scope="col">{{$data->id}}</td>
                <td scope="col">{{$data->new_notice}}</td>
                <td scope="col">{{$data->govement_notice}}</td>
                <td scope="col">{{$data->department_notice}}</td>
                <td scope="col">{{$data->holiday_notice}}</td>
                <td scope="col">{{$data->payroll_notice}}</td>
                <td scope="col">{{$data->notice_time}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-success" href="">View</a>
                    <a  class="btn btn-danger" href="">Delete</a>
                  </td>
            </tr>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{$notice->links()}}
</div>
@endsection
