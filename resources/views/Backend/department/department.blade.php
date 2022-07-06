@extends('Backend.master')
@section('backend_content')
<h1>Add Department</h1>
<a href="{{route('form.department')}}" class="btn btn-primary">Create</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Department_name</th>
            <th scope="col">Department_type</th>
            <th scope="col">Department_documentation</th>
            <th scope="col">Department_email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($department as $data)


        <tr>
            <td scope="col">{{$data->id}} </td>
            <td scope="col">{{$data->department_name}} </td>
            <td scope="col">{{$data->department_type}} </td>
            <td scope="col">{{$data->department_documentation}} </td>
            <td scope="col">{{$data->department_email}} </td>
            <td>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-success" href="">View</a>
                <a  class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$department->links()}}
@endsection


