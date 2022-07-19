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
        @foreach ($designation as$key=>$data )


        <tr>
            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->designation}}</td>
            <td scope="col">{{$data->status}}</td>
            <td>
                <a class="btn btn-primary" href=""><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                <a class="btn btn-success" href="{{route('views.designation',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                <a  class="btn btn-danger" href="{{route('delete.designation',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    {{$designation->links()}}
@endsection

