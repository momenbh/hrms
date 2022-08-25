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
    <form action="{{route('store.notice')}}" method="POST" style="padding: 75px;">
        @csrf
        <label for="text1">Notice Name</label>
        <input  id="text1" type="text" class="form-control" name='notice_name' required>
        <label for="text2">Notice Details</label>
        <textarea id="text2" type="text" class="form-control" name="notice_details" required></textarea>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">submit</button>
     </form>
</div>
@endsection
