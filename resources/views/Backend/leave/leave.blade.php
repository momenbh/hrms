@extends('Backend.master')
@section('backend_content')
<h1>Mange Leave</h1>
<a href="{{route('form.leave')}}" class="btn btn-primary">Create</a>
<table class="table">
    <thead>

         <tr>
            <th scope="col">id</th>
            <th scope="col">reason</th>
            <th scope="col">days</th>
            <th scope="col">to_date</th>
            <th scope="col">from_date</th>
            <th scope="col">Action</th>



         </tr>
    </thead>
    <tbody>
        @foreach ($leave as $data )


        <tr>
            <td scope="col">{{$data->id}}</td>
            <td scope="col">{{$data->reason}}</td>
            <td scope="col">{{$data->days}}</td>
            <td scope="col">{{$data->to_date}}</td>
            <td scope="col">{{$data->from_date}}</td>
            <td scope="col">
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-success" href="">View</a>
                <a  class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$leave->links()}}
@endsection
