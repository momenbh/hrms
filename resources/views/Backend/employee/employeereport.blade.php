@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <h1 style="color:brown">Employee Report</h1>
    <button class="btn btn-success float-right mx-5 my-5" onclick="printdiv()" >Print</button>
    <div id="printTable">
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Employee_name</th>
                    <th scope="col">Phone_number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Date_of_birth</th>
                    <th scope="col">Image</th>
                    <th scope="col">Age</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $key=>$data)
    
                <tr>
                    <td scope="col">{{$key+1}}</td>
                    <td scope="col">{{$data->name}}</td>
                    <td scope="col">{{$data->phone_number}}</td>
                    <td scope="col">{{$data->email}}</td>
                    <td scope="col">{{optional($data->department)->department_name}}</td>
                    <td scope="col">{{optional($data->designationRelation)->designation}}</td>
                    <td scope="col">{{$data->date_of_birth}}</td>
                    <td scope="col">
                        <img style="width: 100px; height:90px;" src="{{url('/uploads/Employee/') .'/' . $data->image}}" alt="">
                    </td>
    
                    <td scope="col">{{$data->age}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{$employees->links()}}
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