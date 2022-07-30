@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('update.leave',$leave->id)}}" method="POST">
        @csrf
        <label for="text" >Reason</label>
        <input  id="text"type="text" class="form-control" name="reason" value="{{$leave->reason}}">
        <label for="name" >Employee name</label><br>
        <select id="name" class="form-select" aria-label="Default select example" name="employee_name">
            <option selected>select Employee</option>

            @foreach ($employees as $data)
                <option value="{{$data->id}}">{{$data->employee_name}}</option>
            @endforeach
          </select>
          <br>
        <label for="number" >days</label>
        <input  id="number"type="number" class="form-control" name="days"  min="1" value="{{$leave->days}}">
        <label for="date" >To Date</label>
        <input  id="date"type="date" class="form-control" name="to_date" value="{{$leave->to_date}}">
        <label for="date" >from Date</label>
        <input  id="date"type="date" class="form-control" name="from_date" value="{{$leave->from_date}}">

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>
@endsection
