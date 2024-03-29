@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <h1 style="color:brown"> Leave Report</h1>
    <button class="btn btn-success float-right mx-5 my-5" onclick="printdiv()" >Print</button>
    <div id="printTable">
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
                <td scope="col">{{$data->status}}</td>
                <td scope="col">
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('edit.leave',$data->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="{{route('delete.leave',$data->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$leaves->links()}}
</div>
</div>
<script>
    function printdiv() {
        let printContents = document.getElementById('printTable').innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection