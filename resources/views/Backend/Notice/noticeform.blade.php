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
    <form action="{{route('store.notice')}}" method="POST" style="padding: 75px;">
        @csrf
        <label for="text1">Department notice</label>
        <input  id="text1" type="text" class="form-control" name='department_notice'>
        <label for="text2">Holiday notice</label>
        <input  id="text2" type="text" style="" class="form-control" name='holiday_notice'>
        {{-- <label for="text2">Holiday notice</label>
        <input  id="text2" type="text" class="form-control" name='holiday_notice'> --}}
        <label for="text3">Payroll notice</label>
        <input  id="text3" type="text" class="form-control" name='payroll_notice' >
        <label for="time">Notice time</label>
        <input  id="time" type="time" class="form-control" name='notice_time' >
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">submit</button>
     </form>
</div>
@endsection
