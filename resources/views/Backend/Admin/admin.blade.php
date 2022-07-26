@extends('Backend.master')
@section('backend_content')
<h1>Add admin</h1>
<a href="{{route('form.admin')}}" class="btn btn-primary">Create</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone number</th>
        <th scope="col">Admin_email</th>
        <th scope="col">Date_of_birth</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $key=>$data)


        <tr>
             <td scope="col">{{$key+1}}</td>
             <td scope="col">{{$data->name}}</td>
             <td scope="col">{{$data->phone_number}}</td>
             <td scope="col">{{$data->admin_email}}</td>
             <td scope="col">{{$data->date_of_birth}}</td>
             <td scope="col">{{$data->age}}</td>
             <td>
                <a class="btn btn-primary" href=""><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                <a class="btn btn-success" href="{{route('views.admin',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                <a  class="btn btn-danger" href="{{route('delete.admin',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
            </td>
        </tr>
           @endforeach
    </tbody>
</table>
{{$admins->links()}}
@endsection

