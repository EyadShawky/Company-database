@extends('layout')

@section('title')
dependent
@endsection

@section('content')
<div class="pos-main-layout">
    <div class="container d-flex justify-content-between mb-5">
        <h3>
            dependent
        </h3>


        <a class="create-button d-flex justify-content-center align-items-center" href="{{ url("/dependent/create") }}">
            Add dependent
        </a>

    </div>


    <table class="table table-dark container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">relationship</th>
                <th scope="col">Sex</th>
                <th scope="col">Birth_date</th>
                <th scope="col">employee_id</th>
                <th scope="col">Created At</th>

            </tr>
        </thead>
        @foreach($dependents as $dependent)
        <tbody>
            <tr>
                <th scope="row">{{$dependent->id}}</th>
                <td>{{$dependent->name}}</td>
                <td>{{$dependent->relationship}}</td>
                <td>@if( $dependent->Sex == 1)
                    <p>Male</p>
                    @elseif($dependent->Sex == 2)
                    <p>Female</p>
                    @endif
                </td>
                <td>{{$dependent->Birth_date}}</td>
                <td>{{$dependent->employee_id}}</td>
                <td>{{$dependent->created_at}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection