@extends('Backend.master')
@section('backend_content')
<h1>Add Holiday</h1>
<a href="{{route('form.holiday')}}" class="btn btn-primary">Create</a>
<table class="table">
     <thead>
          <tr>

           <th scope="col">id</th>
           <th scope="col">title</th>
           <th scope="col">holiday_date</th>
           <th scope="col">days</th>
           <th scope="col">Action</th>



        </tr>
   </thead>
    <tbody>
        @foreach ($holidays as $key=>$data )

        <tr>
            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->title}}</td>
            <td scope="col">{{$data->holiday_date}}</td>
            <td scope="col">{{$data->day}}</td>
            <td scope="col">
                <a class="btn btn-primary" href=""><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                <a class="btn btn-success" href="{{route('views.holiday',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                <a  class="btn btn-danger" href="{{route('delete.holiday',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$holidays->links()}}
@endsection
