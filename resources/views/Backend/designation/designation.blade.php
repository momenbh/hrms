@extends('Backend.master')
@section('backend_content')
<h1>Add Designation</h1>
<a href="{{route('form.designation')}}" class="btn btn-primary">create</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">designation</th>
            <th scope="col">status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($designation as $data )


        <tr>
            <td scope="col">{{$data->id}}</td>
            <td scope="col">{{$data->designation}}</td>
            <td scope="col">{{$data->status}}</td>
            <td>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-success" href="">View</a>
                <a  class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    {{$designation->links()}}
@endsection

