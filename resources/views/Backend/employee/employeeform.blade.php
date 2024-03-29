@extends('Backend.master')
@section('backend_content')
<div>
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
</div>

<form action="{{route('store.employee')}}" method="POST" enctype="multipart/form-data" style="padding: 75px;">
    @csrf
    <label for="name">Employee Name *</label>
    <input  id="name"type="text" class="form-control" name="name" required>
    <label for="number">Phone Number* </label>
    <input  id="number"type="text" class="form-control" name="phone_number" required>
    <label for="email">Employee Email*</label>
    <input  id="email"type="email" class="form-control" name="email" required>
    <label for="date">Date OF birth</label>
    <input  id="date"type="date" class="form-control" name="date_of_birth">
    <label for="integer">Age</label>
    <input  id="integer"type="number" class="form-control" name="age" required min="1" max="50">
    <label for="integer">Password</label>
    <input  id="integer"type="password" class="form-control" name="password" required min="1" max="50">
    <label for="image">Image</label>
    <input  id="image"type="file" class="form-control" name="image" >
    <select name="department" id="">
        <option value="">Select Department</option>
        @foreach ($department as $data)
            <option value="{{$data->id}}">{{$data->department_name}}</option>
        @endforeach
    </select>
    <select name="designation" id="">
        <option value="">Select designation</option>
        @foreach ($designation as $data)
            <option value="{{$data->id}}">{{$data->designation}}</option>
        @endforeach
    </select><br>
    <button class="btn btn-primary" type="submit" style="margin-top: 20px">create</button>


</form>

</div>
@endsection

