@extends('Backend.master')
@section('backend_content')
<h1>View Notice</h1>
<a href="{{route('form.notice')}}" class="btn btn-primary">Create</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">New Notice</th>
                <th scope="col">Govement Notice</th>
                <th scope="col">Department Notice</th>
                <th scope="col">Holiday Notice</th>
                <th scope="col">Payroll Notice</th>
                <th scope="col">Notice time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $notice as$key=>$data )


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->new_notice}}</td>
                <td scope="col">{{$data->govement_notice}}</td>
                <td scope="col">{{$data->department_notice}}</td>
                <td scope="col">{{$data->holiday_notice}}</td>
                <td scope="col">{{$data->payroll_notice}}</td>
                <td scope="col">{{$data->notice_time}}</td>
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
