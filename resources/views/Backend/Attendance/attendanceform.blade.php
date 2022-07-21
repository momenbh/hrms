@extends('Backend.master')
@section('backend_content')
<div>
    <div>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
    </div>
    <form action="{{route('store.attendance')}}" method="POST">
        @csrf
        <label for="">Employee Name</label>
        <select id="name" class="form-select" aria-label="Default select example" name="employee_name">
            <option selected>select Employee</option>

            @foreach ($employees as $data)
                <option value="{{$data->id}}">{{$data->employee_name}}</option>
            @endforeach
          </select>
        <label for="date">Login_date</label>
        <input  id="date"type="date" class="form-control" name="login_date" required >
        <label for="date">Logout_date</label>
        <input  id="date"type="date" class="form-control" name="logout_date" required>
        <label for="time">time</label>
        <input  id="time"type="time" class="form-control" name="time" required>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection
