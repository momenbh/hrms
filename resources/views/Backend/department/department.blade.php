@extends('Backend.master')
@section('backend_content')
<div style="padding: 10px">
    <h1>Add Department</h1>
<a href="{{route('form.department')}}" class="btn btn-primary">Create</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Department_name</th>
            <th scope="col">phone number</th>
            <th scope="col">Department_details</th>
            <th scope="col">Department_email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($department as$key=>$data)


        <tr>
            <td scope="col">{{$key+1}} </td>
            <td scope="col">{{$data->department_name}}</td>
            <td scope="col">{{$data->phone_number}} </td>
            <td scope="col">{{$data->department_details}} </td>
            <td scope="col">{{$data->department_email}} </td>
            <td>
                <a class="btn btn-primary" href="{{route('edit.department',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                <a class="btn btn-success" href="{{route('views.department',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                <a  class="btn btn-danger" href="{{route('delete.department',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$department->links()}}
</div>
@endsection


