@extends('Backend.master')
@section('backend_content')
<div style="padding: 50px">
    <h1 style="color: brown">leave List</h1>
    <table class="table">
        <thead>

             <tr>
                <th scope="col">id</th>
                <th scope="col">Employee Name</th>
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
                <td scope="col">{{$data->employee_name}}</td>
                <td scope="col">{{optional($data->leavetypeId)->name}}</td>
                <td scope="col">{{$data->from_date}}</td>
                <td scope="col">{{$data->to_date}}</td>
                <td scope="col">{{$data->reason}}</td>
                <td scope="col">{{$data->days}}</td>
                <td scope="col">
                   <form action="{{route('leave.status',$data->id)}}" method="POST">
                    @csrf



                            <select id="name" class="form-select" aria-label="Default select example" name="status">
                                <option selected >selete status</option>
                                <option  value="approve">Approved</option>
                                <option  value="cancle">Cancle</option>
                            </select>
                            <button type="submit" class="btn btn-primary">refresh</button>

                   </form>
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
