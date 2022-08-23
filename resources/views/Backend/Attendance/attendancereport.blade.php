@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <h1 style="color:brown">Attendance Report</h1>
    <button class="btn btn-success float-right mx-5 my-5" onclick="printdiv()" >Print</button>
    <div id="printTable">
    <table class="table">
        <thead>
          <tr>
              <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">CheckIn Time</th>
                  <th scope="col">CheckOut Time</th>
                  <th scope="col">Status</th>
                 
  
          </tr>
        </thead>
        <tbody>
          <tr>
         
              @foreach ($attendance as $key=>$data )
  
              <td scope="col">{{$key+1}}</td>
              <td scope="col">{{$data->name}}</td>
              <td scope="col">{{$data->created_at}}</td>
  
              <td scope="col">{{$data->outtime}} </td>
              <td scope="col">{{$data->status}}</td>
              <td scope="col">
                 
              </td>
  
          </tr>
          @endforeach
  
        </tbody>
      </table>
</div>
</div>
<script>
    function printdiv() {
        let printContents = document.getElementById('printTable').innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection