@extends('Backend.master')
@section('backend_content')
<div>
    <div class="container">
       <h1 style="color: brown">Leave type</h1>
       <a href="{{route('form.leavetype')}}" class="btn btn-success">Create</a>
    </div>
    <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $key=>$data)
    
    
                <tr>
                    <td scope="col">{{$key+1}}</td>
                    <td scope="col">{{$data->name}}</td>
                    <td scope="col">{{$data->status}}</td>
                    <td scope="col">{{$data->balance}}</td>
                    <td scope="col">
                        <a class="btn btn-primary" href="{{route('typeedit.leave',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                        <a class="btn btn-info" href="{{route('typeviews.leave',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                        <a  class="btn btn-success" href="{{route('typedelete.leave',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    
        </table>
    </div>
    {{$types->links()}}
</div>
@endsection
