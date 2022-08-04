@extends('Backend.master')
@section('backend_content')
<h1>Apply Leave</h1>
<a href="{{route('form.leave')}}" class="btn btn-primary">Apply</a>
<table class="table">
    <thead>

         <tr>
            <th scope="col">id</th>
            <th scope="col">Leave Type</th>
            <th scope="col">Employee Name</th>
            <th scope="col">days</th>
            <th scope="col">from_date</th>
            <th scope="col">to_date</th>
            <th scope="col">reason</th>
            <th scope="col">Status</th>
            <th scope="col">Approved By</th>
            <th scope="col">Action</th>



         </tr>
    </thead>
    {{-- <tbody>
        @foreach ($leave as $key=>$data)


        <tr>
            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->leave_type}}</td>
            <td scope="col">{{optional($data->employeeId)->employee_name}}</td>
            <td scope="col">{{$data->days}}</td>
            <td scope="col">{{$data->from_date}}</td>
            <td scope="col">{{$data->to_date}}</td>
            <td scope="col">{{$data->reason}}</td>
            <td scope="col">{{$data->status}}</td>
            <td scope="col">{{$data->approved_by}}</td>
            <td scope="col">
                <a class="btn btn-primary" href="{{route('edit.leave',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                <a class="btn btn-info" href="{{route('views.leave',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                <a  class="btn btn-success" href="{{route('delete.leave',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
            </td>
        </tr>
        @endforeach
    </tbody> --}}
</table>
{{-- {{$leave->links()}} --}}
@endsection
