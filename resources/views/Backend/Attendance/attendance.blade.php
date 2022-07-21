@extends('Backend.master')
@section('backend_content')
<h1>Give Attendance</h1>
<a href="{{route('form.attendance')}}" class="btn btn-primary">submit</a>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">employee Name</th>
                <th scope="col">login_date</th>
                <th scope="col">logout_date</th>
                <th scope="col">time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendance as$key=>$data )


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{optional($data->employeerelation)->employee_name}}</td>
                <td scope="col">{{$data->login_date}}</td>
                <td scope="col">{{$data->logout_date}}</td>
                <td scope="col">{{$data->time}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href=""><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                    <a class="btn btn-success" href="{{route('single.attendance',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                    <a  class="btn btn-danger" href="{{route('delete.attendance',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>

                </td>


            </tr>
            @endforeach
        </tbody>

    </table>
</div>
{{$attendance->links()}}
@endsection
