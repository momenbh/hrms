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
        <label for="text">Designation</label>
        <input  id="text"type="text" class="form-control" name="designation" required>
        <label for="text">status</label>
        <input  id="text"type="text" class="form-control" name="status" required>
        <button type="submit" class="btn btn-primary">create</button>
    </form>
</div>
@endsection
