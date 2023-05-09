@extends('layout')

@section('title')
    Employee
@endsection

@section('content')
    <div class="pos-main-layout">
        <div class="container d-flex justify-content-between mb-5">
            <h3>
             depts_location
            </h3>


            <a class="create-button d-flex justify-content-center align-items-center" href="{{ url("/depts-locations/create") }}">
               Add depts_location
            </a>

        </div>


        <table class="table table-dark container">
            <thead>
            <tr>

                <th scope="col">depts_location</th>
                <th scope="col">Created At</th>

            </tr>
            </thead>
            @foreach($dept_locations as $dept_location)
                <tbody>
                <tr>
                    <td>{{$dept_location->d_location}}</td>
                    <td>{{$dept_location->created_at}}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
