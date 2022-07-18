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
    <form action="{{route('store.notice')}}" method="POST">
        @csrf
        <label for="text1">New notice</label>
        <input  id="text1" type="text" class="form-control" name='new_notice' required>
        <label for="text2">Govement notice</label>
        <input  id="text2" type="text" class="form-control" name='govement_notice' required>
        <label for="text3">Department notice</label>
        <input  id="text3" type="text" class="form-control" name='department_notice' required>
        <label for="text4">Holiday notice</label>
        <input  id="text4" type="text" class="form-control" name='holiday_notice' required>
        <label for="text5">Payroll notice</label>
        <input  id="text5" type="text" class="form-control" name='payroll_notice' required>
        <label for="time">Notice time</label>
        <input  id="time" type="time" class="form-control" name='notice_time' required>
        <button type="submit" class="btn btn-primary">submit</button>
     </form>
</div>
@endsection
