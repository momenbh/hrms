@extends('Backend.master')
@section('backend_content')
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



    <form action="{{route('store.leave')}}" method="POST">
        @csrf
        <label for="text" >Reason</label>
        <input  id="text"type="text" class="form-control" name="reason" required>
        <label for="name" >Employee name</label><br>
        <select id="name" class="form-select" aria-label="Default select example" name="employee_name">
            <option selected>select Employee</option>

            @foreach ($employees as $data)
                <option value="{{$data->id}}">{{$data->employee_name}}</option>
            @endforeach
          </select>
          <br>
        <label for="number" >days</label>
        <input  id="number"type="number" class="form-control" name="days" required min="1">
        <label for="date" >To Date</label>
        <input  id="date"type="date" class="form-control" name="to_date" required>
        <label for="date" >from Date</label>
        <input  id="date"type="date" class="form-control" name="from_date" required>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>
@endsection
