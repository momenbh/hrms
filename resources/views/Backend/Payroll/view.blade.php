@extends('Backend.master')
@section('backend_content')
<label for="number">payment</label>
<input type="text" id="number"  class="form-control" value="{{$payrolls->payment}}" readonly>
<label for="number">Basic payment </label>
<input type="text" id="number"  class="form-control" value="{{$payrolls->Basic_payment}}" readonly>
<label for="number">overtime payment</label>
<input type="text" id="number" class="form-control" value="{{$payrolls->overtime_payment}}" readonly>
<label for="number">Bouns</label>
<input type="text" id="number"class="form-control" value="{{$payrolls->Bouns}}" readonly>
<label for="text">date</label>
<input type="date" id="text" class="form-control" value="{{$payrolls->date}}" readonly>
@endsection

