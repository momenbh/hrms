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
            <th scope="col">from_date</th>
            <th scope="col">to_date</th>
            <th scope="col">Action</th>



         </tr>
    </thead>
    <tbody>
        @foreach ($leave as $key=>$data)


        <tr>
            <td scope="col">{{$key+1}}</td>

            <td scope="col">{{$data->reason}}</td>
            <td scope="col">{{$data->days}}</td>
            <td scope="col">{{$data->from_date}}</td>
            <td scope="col">{{$data->to_date}}</td>
            <td scope="col">
                <a class="btn btn-primary" href=""><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                <a class="btn btn-success" href="{{route('views.leave',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                <a  class="btn btn-danger" href="{{route('delete.leave',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$leave->links()}}
@endsection
