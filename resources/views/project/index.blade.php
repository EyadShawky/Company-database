@extends('layout')

@section('title')
Projects
@endsection

@section('content')
    <div class="pos-main-layout">
        <div class="container d-flex justify-content-between mb-5">
            <h3>
            Projects
            </h3>


            <a class="create-button d-flex justify-content-center align-items-center" href="{{ url("/project/create") }}">
               Add Projects
            </a>

        </div>


        <table class="table table-dark container">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Locations</th>
                <th scope="col">Number</th>
                <th scope="col">Department_id</th>
                <th scope="col">Created_at</th>
            </tr>
            </thead>
            @foreach($projects as $project)
                <tbody>
                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->locations}}</td>
                    <td>{{$project->number}}</td>
                    <td>{{$project->department_id}}</td>
                    <td>{{$project->created_at}}</td>

                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
