@extends('Backend.master')
@section('backend_content')
<h1>Add admin</h1>
<a href="{{route('form.admin')}}" class="btn btn-primary">Create</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Admin_name</th>
        <th scope="col">Phone number</th>
        <th scope="col">Admin_email</th>
        <th scope="col">Date_of_birth</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $data)


        <tr>
             <td scope="col">{{$data->id}}</td>
             <td scope="col">{{$data->admin_name}}</td>
             <td scope="col">{{$data->phone_number}}</td>
             <td scope="col">{{$data->admin_email}}</td>
             <td scope="col">{{$data->date_of_birth}}</td>
             <td scope="col">{{$data->age}}</td>
             <td>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-success" href="">View</a>
                <a  class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
           @endforeach
    </tbody>
</table>
{{$admins->links()}}
@endsection

