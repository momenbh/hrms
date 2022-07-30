@extends('Backend.master')
@section('backend_content')
<form action="{{route('update.payroll',$payrolls->id)}}" method="POST">
    @csrf
    <label for="number">payment</label>
    <input type="text" id="number"  class="form-control" name="payment" value="{{$payrolls->payment}}">
    <select id="name" class="form-select" aria-label="Default select example" name="employee_name">
        <option selected>select Employee</option>

        @foreach ($employees as $data)
            <option value="{{$data->id}}">{{$data->employee_name}}</option>
        @endforeach
      </select>
    <label for="number">Basic payment </label>
    <input type="text" id="number"  class="form-control" name="basic_payment" value="{{$payrolls->basic_payment}}">
    <label for="number">overtime payment</label>
    <input type="text" id="number" class="form-control" name="overtime_payment" value="{{$payrolls->overtime_payment}}">
    <label for="number">Bouns</label>
    <input type="text" id="number"class="form-control" name="bouns" value="{{$payrolls->bouns}}">
    <label for="text">date</label>
    <input type="date" id="text" class="form-control" name="date" value="{{$payrolls->date}}">
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
