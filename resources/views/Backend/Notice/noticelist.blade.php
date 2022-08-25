@extends('Backend.master')
@section('backend_content')
<h1 class="mt-3 ml-3" style="color:brown">Notice</h1>
<div style="padding: 40px">
     <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Notice Name</th>
                <th scope="col">Notice Details</th>
                <th scope="col">Time</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ( $notice as$key=>$data )


            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->notice_name}}</td>
                <td scope="col">{{$data->notice_details}}</td>
                <td scope="col">{{$data->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        </tbody>

    </table> 
   
    {{$notice->links()}}
</div>
@endsection
