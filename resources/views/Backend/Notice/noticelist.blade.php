@extends('Backend.master')
@section('backend_content')
<h1>Notice</h1>
<div>
     <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Department Notice</th>
                <th scope="col">Holiday Notice</th>
                <th scope="col">Payroll Notice</th>
                <th scope="col">Notice time</th>

            </tr>
        </thead>
        <tbody>
            @foreach ( $notice as$key=>$data )


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->department_notice}}</td>
                <td scope="col">{{$data->holiday_notice}}</td>
                <td scope="col">{{$data->payroll_notice}}</td>
                <td scope="col">{{$data->notice_time}}</td>
               
            </tr>
            @endforeach
        </tbody>

    </table> 
   
    {{$notice->links()}}
</div>
@endsection
