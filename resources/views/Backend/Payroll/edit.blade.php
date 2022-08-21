@extends('Backend.master')
@section('backend_content')
<form action="{{route('update.payroll',$payrolls->id)}}" method="POST">
    @csrf
    <label for="number">Salary</label>
    <input type="text" id="number"  class="form-control" name="salary" value="{{$payrolls->salary}}">
    <select id="name" class="form-select" aria-label="Default select example" name="employee_id">
        <option selected>select Employee</option>

        @foreach ($employees as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
      </select>
    <label for="number">Basic Salary</label>
    <input type="text" id="number"  class="form-control" name="basic_salary" value="{{$payrolls->basic_salary}}">
    <label for="number">overtime Salary</label>
    <input type="text" id="number" class="form-control" name="overtime_salary" value="{{$payrolls->overtime_salary}}">
    <label for="number">Bouns</label>
    <input type="text" id="number"class="form-control" name="bouns" value="{{$payrolls->bouns}}">
    <label for="text">date</label>
    <input type="date" id="text" class="form-control" name="date" value="{{$payrolls->date}}">
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
