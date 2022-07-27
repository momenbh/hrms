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
    <form action="{{route('store.designation')}}" method="post">
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
        <input  id="text"type="text" class="form-control" name="designation" required>
        <label for="text">status</label>
        <select name="status" id="" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <button type="submit" class="btn btn-primary">create</button>
    </form>
</div>
@endsection
