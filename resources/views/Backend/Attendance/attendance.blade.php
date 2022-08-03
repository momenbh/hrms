@extends('Backend.master')
@section('backend_content')
<h1>Give Attendance</h1>
<a href="{{route('form.attendance')}}" class="btn btn-primary">Create</a>
<a href="{{route('checkin.attendance')}}" class="btn btn-primary">Checkin</a>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">date</th>
                <th scope="col">CheckIn Time</th>
                <th scope="col">CheckIn Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendance as $key=>$data )


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{optional($data->employeerelation)->name}}</td>
                <td scope="col">{{$data->login_date}}</td>
                <td scope="col">{{$data->logout_date}}</td>
                <td scope="col">{{$data->time}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('edit.attendance',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
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
