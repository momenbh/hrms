@extends('Backend.master')
@section('backend_content')
<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">login_date</th>
            <th scope="col">logout_date</th>
            <th scope="col">time</th>
            <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        {{-- @dd($attendance) --}}
            @foreach ($attendance as $key=>$data )

            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->employeerelation->employee_name}}</td>
            <td scope="col">{{$data->login_date}}</td>
            <td scope="col">{{$data->logout_date}}</td>
            <td scope="col">{{$data->time}}</td>
            <td scope="col">
                <a href="{{route('checkout.attendance')}}" class="btn btn-primary">Checkout</a>
            </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>
{{$attendance->links()}}

@endsection
