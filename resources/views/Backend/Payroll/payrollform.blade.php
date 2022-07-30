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
<form action="{{route('store.form')}}" method="POST">
    @csrf
    <label for="number">payment</label>
    <input type="text" id="number"  class="form-control" name="payment" required>
    <select id="name" class="form-select" aria-label="Default select example" name="employee_name">
        <option selected>select Employee</option>

        @foreach ($employees as $data)
            <option value="{{$data->id}}">{{$data->employee_name}}</option>
        @endforeach
      </select><br>
    <label for="number">Basic payment </label>
    <input type="text" id="number"  class="form-control" name="basic_payment" required>
    <label for="number">overtime payment</label>
    <input type="text" id="number" class="form-control" name="overtime_payment" required>
    <label for="number">Bouns</label>
    <input type="text" id="number"class="form-control" name="bouns" required>
    <label for="text">date</label>
    <input type="date" id="text" class="form-control" name="date" required>
    <button type="submit" class="btn btn-success">Cretae</button>
</form>
@endsection
