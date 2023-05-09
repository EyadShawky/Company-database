@extends('layout')

@section('title')
    Departments
@endsection

@section('content')
    <div class="pos-main-layout">
        <div class="container d-flex justify-content-between mb-5">
            <h3>
            Departments
            </h3>


            <a class="create-button d-flex justify-content-center align-items-center" href="{{ url("/department/create") }}">
               Add Departments
            </a>

        </div>


        <table class="table table-dark container">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">locations</th>
                <th scope="col">number</th>
                <th scope="col">number_of_employess</th>
                <th scope="col">mgr_id</th>
                <th scope="col">created_at</th>
            </tr>
            </thead>
            @foreach($departments as $department)
                <tbody>
                <tr>
                    <th scope="row">{{$department->id}}</th>
                    <td>{{$department->name}}</td>
                    <td>{{$department->locations}}</td>
                    <td>{{$department->number}}</td>
                    <td>{{$department->number_of_employess}}</td>
                    <td>{{$department->mgr_id}}</td>
                    <td>{{$department->created_at}}</td>

                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
