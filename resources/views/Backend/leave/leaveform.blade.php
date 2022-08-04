@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('store.leave')}}" method="POST">
        @csrf
        <label for="text" >Leave Type</label><br>

        <select id="type" class="form-select" aria-label="Default select example" name="leave_type">
            <option selected>select Leave Type</option>

            @foreach ($types as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach

          </select><br>
          <label for="date" >from Date</label>
          <input  id="date"type="date" class="form-control" name="from_date" required>
          <label for="date" >To Date</label>
          <input  id="date"type="date" class="form-control" name="to_date" required>
        <label for="text" >Reason</label>
        <input  id="text"type="text" class="form-control" name="reason" required>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>
@endsection
