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
    <form action="{{route('store.holiday')}}" method="POST">
        @csrf
        <label for="string">Title</label>
        <input  id="string"type="text" class="form-control"name="title" required>
        <label for="text2">Holiday date</label>
        <input  id="text2"type="date" class="form-control"name="holiday_date" required>
        <label for="text3">day</label>
        <input  id="text3"type="number" class="form-control"name="day" required min="1">
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
