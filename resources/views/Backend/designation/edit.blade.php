@extends('Backend.master')
@section('backend_content')
<div>
    <form action="{{route('update.designation',$designation->id)}}" method="POST">
        @csrf
        <label for="name" >Department name</label>
        <br>
        <select id="name" class="form-select" aria-label="Default select example" name="department_name">
            <option selected>select Department</option>

            @foreach ($department as $data)
                <option value="{{$data->id}}">{{$data->department_name}}</option>
            @endforeach
          </select>
          <br>
        <label for="text">Designation</label>
        <input  id="text"type="text" class="form-control" name="designation" value="{{$designation->designation}}">
        <label for="text">status</label>
        <select name="status" id="" class="form-control">
            <option @if($designation->status == 'active') selected @endif value="active">Active</option>
            <option @if($designation->status == 'inactive') selected @endif value="inactive">Inactive</option>
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </form>
</div>
@endsection
