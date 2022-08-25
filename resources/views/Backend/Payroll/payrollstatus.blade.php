@extends('Backend.master')
@section('backend_content')
<h1>Payroll Status</h1>

    <div class="container m-3">
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
                    <td scope="col">{{$data->salary}}</td>
                    <td scope="col">{{$data->basic_salary}}</td>
                    <td scope="col">{{$data->overtime_salary}}</td>
                    <td scope="col">{{$data->bouns}}</td>
                    <td scope="col">{{$data->date}}</td>
                    
                </tr>
                @endforeach
            </tbody>
    
        </table>
      
    </div>
 
@endsection