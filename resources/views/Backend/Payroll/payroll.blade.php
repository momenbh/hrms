@extends('Backend.master')
@section('backend_content')
<div style="padding: 50px">
    <h1 style="color: brown">Create payroll</h1>
<a href="{{route('form.payroll')}}" class="btn btn-success">Create</a>
    <table class="table mt-3" >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Employee Name</th>
                <th scope="col">salary</th>
                <th scope="col">basic_salary</th>
                <th scope="col">overtime_salary</th>
                <th scope="col">bouns</th>
                <th scope="col">date</th>
                <th scope="col">Action</th>
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
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('edit.payroll',$data->id)}}"><img src="{{url('backend/assets/icon/edit.svg')}}" alt=""></a>
                    <a class="btn btn-success" href="{{route('views.payroll',$data->id)}}"><img src="{{url('backend/assets/icon/view.svg')}}" alt=""></a>
                    <a  class="btn btn-danger" href="{{route('delete.payroll',$data->id)}}"><img src="{{url('backend/assets/icon/delete.svg')}}" alt=""></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{$payrolls->links()}}
</div>
@endsection()
