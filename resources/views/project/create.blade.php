@extends('layout')

@section('title')
Add project
@endsection

@section('content')
<div class="pos-main-layout pl-5">
    <h1 class="mb-3 bg-add">Add project</h1>

    <div class="mt-4 ">
        <form action="{{url('/project')}}" method="POST">
            @csrf
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                </div>
                <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">locations</span>
                </div>
                <input name="locations" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text">number</span>
                </div>
                <input name="number" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            </div>

            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Department</label>

                @foreach($departments as $department)
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="department_id" value="{{$department->id}}" >
                    <label class="form-check-label" for="inlineRadio1">{{$department->name}}</label>
                </div>
                @endforeach
            </div>


    </div>

    <input type="submit" value="store" class="btn create-button  mt-2 text-capitalize">
    </form>
</div>
</div>

@endsection