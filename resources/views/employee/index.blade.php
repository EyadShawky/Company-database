@extends('layout')

@section('title')
    Employee
@endsection

@section('content')
    <div class="pos-main-layout">
        <div class="container d-flex justify-content-between mb-5">
            <h3>
                Employee
            </h3>


            <a class="create-button d-flex justify-content-center align-items-center" href="{{ url("/employees/create") }}">
               Add Employee
            </a>

        </div>


        <table class="table table-dark container">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Sex</th>
                <th scope="col">Bdate</th>
                <th scope="col">salary</th>
                <th scope="col">super_ssn</th>
                <th scope="col">Created At</th>

            </tr>
            </thead>
            @foreach($employees as $employee)
                <tbody>
                <tr>
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->Address}}</td>
                    <td>@if( $employee->Sex == 1)
                            <p>Male</p>
                        @elseif($employee->Sex == 2)
                            <p>Female</p>
                        @endif
                    </td>
                    <td>{{$employee->Bdate}}</td>
                    <td>{{$employee->salary}}</td>

                    <td>{{$employee->super_ssn}}</td>
                    <td>{{$employee->created_at}}</td>

                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
