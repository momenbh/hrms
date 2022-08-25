@extends('Backend.master')
@section('backend_content')
<h1>Create Notice</h1>
<a href="{{route('form.notice')}}" class="btn btn-primary">Create</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Notice Name</th>
                <th scope="col">Notice Details</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $notice as$key=>$data )


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->notice_name}}</td>
                <td scope="col">{{$data->notice_details}}</td>
                <td scope="col">{{$data->created_at->diffForHumans()}}
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('edit.notice',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                    <a class="btn btn-success" href="{{route('single.notice', $data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                    <a  class="btn btn-danger" href="{{route('delete.notice', $data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
                  </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{$notice->links()}}
</div>
@endsection
