@extends('Backend.master')
@section('backend_content')

<div>
    <form action="{{route('employee.mail.store')}}" method="POST" style="padding: 75px">
        @csrf
        <label for="subject" >Subject :</label>
        <input  id="subject"type="text" class="form-control" name="subject" required>
          <label for="email" >Email :</label>
          <input  id="email"type="email" class="form-control" name="email" required>
          <label for="messege" >Reson :</label>
          <textarea id="messege" class="form-control" name="reson" required></textarea>


        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Send Message</button>

    </form>
</div>

@endsection