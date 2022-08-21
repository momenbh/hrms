@extends('Backend.master')
@section('backend_content')
<label for="number">Salary</label>
<input type="text" id="number"  class="form-control" value="{{$payrolls->salary}}" readonly>
<label for="number">Basic Salary </label>
<input type="text" id="number"  class="form-control" value="{{$payrolls->basic_salary}}" readonly>
<label for="number">overtime Salary</label>
<input type="text" id="number" class="form-control" value="{{$payrolls->overtime_salary}}" readonly>
<label for="number">Bouns</label>
<input type="text" id="number"class="form-control" value="{{$payrolls->bouns}}" readonly>
<label for="text">date</label>
<input type="date" id="text" class="form-control" value="{{$payrolls->date}}" readonly>
@endsection

