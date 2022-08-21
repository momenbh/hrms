@extends('Backend.master')
@section('backend_content')
{{-- <div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{route('store.form')}}" method="POST" style="padding: 75px;">
    @csrf
    <label for="number">salary</label>
    <input type="text" id="number"  class="form-control" name="salary" required>
    <select id="name" class="form-select" aria-label="Default select example" name="employee_id">
        <option selected>select Employee</option>

        @foreach ($employees as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
      </select><br>
    <label for="number">Basic Salary </label>
    <input type="text" id="number"  class="form-control" name="basic_salary">
    <label for="number">overtime Salary</label>
    <input type="text" id="number" class="form-control" name="overtime_salary">
    <label for="number">Bouns</label>
    <input type="text" id="number"class="form-control" name="bouns">
    <label for="text">date</label>
    <input type="date" id="text" class="form-control" name="date"required>
    <button type="submit" class="btn btn-success" style="margin-top: 20px">Cretae</button>
</form>
@endsection
