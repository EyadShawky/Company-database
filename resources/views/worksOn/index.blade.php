@extends('layout')

@section('title')
Employee
@endsection

@section('content')
<div class="pos-main-layout">
    <div class="container d-flex justify-content-between mb-5">
        <h3>
            works-on
        </h3>


        <a class="create-button d-flex justify-content-center align-items-center" href="{{ url("/works-on/create") }}">
            Add works-on
        </a>

    </div>


    <table class="table table-dark container">
        <thead>
            <tr>
            <th scope="col">ID</th>
                <th scope="col">whours</th>
                <th scope="col">employee_id</th>
                <th scope="col">project_id</th>
                <th scope="col">Created At</th>

            </tr>
        </thead>
        @foreach($works_on as $work_on)
        <tbody>
            <tr>
            <th scope="row">{{$work_on->id}}</th>
                <td>{{$work_on->whours}}</td>
                <td>{{$work_on->employee_id}}</td>
                <td>{{$work_on->project_id  }}</td>
                <td>{{$work_on->created_at}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection