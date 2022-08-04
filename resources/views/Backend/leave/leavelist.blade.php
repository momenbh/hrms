@extends('Backend.master')
@section('backend_content')
<h1>leave List</h1>

<div>
    <table class="table">
        <thead>

             <tr>
                <th scope="col">id</th>
                <th scope="col">Leave Type</th>
                <th scope="col">from_date</th>
                <th scope="col">to_date</th>
                <th scope="col">Reason</th>
                <th scope="col">days</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>



             </tr>
        </thead>
        <tbody>
            @foreach ($leaves as $key=>$data)


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{optional($data->leavetyperelation)->leave_type}}</td>
                <td scope="col">{{$data->from_date}}</td>
                <td scope="col">{{$data->to_date}}</td>
                <td scope="col">{{$data->reason}}</td>
                <td scope="col">{{$data->days}}</td>
                <td scope="col">{{$data->status}}
                    <div class="dropdown action-label">
                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-dot-circle-o text-purple"></i> pending
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                        </div>
                    </div>
                </td>
                <td scope="col">
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('edit.leave',$data->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="{{route('delete.leave',$data->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    {{-- <a class="btn btn-success" href="{{route('edit.leave',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                    <a class="btn btn-success" href="{{route('views.leave',$data->id)}}"><img src="{{url('backend/assets/icon/backspace-reverse.svg')}}" alt=""></a>
                    <a  class="btn btn-danger" href="{{route('delete.leave',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$leaves->links()}}
</div>
@endsection
