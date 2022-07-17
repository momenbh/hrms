@extends('Backend.master')
@section('backend_content')
<h1>Add Employee</h1>
<a href="{{route('form.employee')}}" class="btn btn-primary">create</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Employee_name</th>
                <th scope="col">Phone_number</th>
                <th scope="col">Email</th>
                <th scope="col">Department Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Date_of_birth</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $data)


            <tr>
                <td scope="col">{{$data->id}}</td>
                <td scope="col">{{$data->employee_name}}</td>
                <td scope="col">{{$data->phone_number}}</td>
                <td scope="col">{{$data->employee_email}}</td>
                <td scope="col">{{$data->department->department_name}}</td>
                <td scope="col">{{$data->designation}}</td>
                <td scope="col">{{$data->date_of_birth}}</td>
                <td scope="col">{{$data->age}}</td>
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
{{$employees->links()}}
@endsection
