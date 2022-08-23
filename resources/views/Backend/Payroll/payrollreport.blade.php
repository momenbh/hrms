@extends('Backend.master')
@section('backend_content')
<div style="padding: 50px;">
    <h1 style="color:brown"> Payment Report</h1>
    <button class="btn btn-success float-right mx-5 my-5" onclick="printdiv()" >Print</button>
    <div id="printTable">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">salary</th>
                    <th scope="col">basic_salary</th>
                    <th scope="col">overtime_salary</th>
                    <th scope="col">bouns</th>
                    <th scope="col">date</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($payrolls as $key=>$data)
    
    
                <tr>
                    <td scope="col">{{$key+1}}</td>
                    <td scope="col">{{optional($data->user)->name}}</td>
                    {{-- <td scope="col">{{$data->employee_name}}</td> --}}
                    <td scope="col">{{$data->salary}}</td>
                    <td scope="col">{{$data->basic_salary}}</td>
                    <td scope="col">{{$data->overtime_salary}}</td>
                    <td scope="col">{{$data->bouns}}</td>
                    <td scope="col">{{$data->date}}</td>
                 
                </tr>
                @endforeach
            </tbody>
    
        </table>
        {{$payrolls->links()}}
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