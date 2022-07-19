@extends('Backend.master')
@section('backend_content')
<label for="text" >Reason</label>
<input  id="text"type="text" class="form-control"  value="{{$leave->reason}}" readonly>
<label for="number" >days</label>
<input  id="number"type="number" class="form-control" value="{{$leave->days}}" readonly >
<label for="date" >To Date</label>
<input  id="date"type="date" class="form-control" value="{{$leave->to_date}}" readonly>
<label for="date" >from Date</label>
<input  id="date"type="date" class="form-control" value="{{$leave->from_date}}" readonly>
@endsection
