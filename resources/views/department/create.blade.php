@extends('layout')

@section('title')
    Add Department
@endsection

@section('content')
    <div class="pos-main-layout pl-5">
        <h1 class="mb-3 bg-add">Add Department</h1>

        <div class="mt-4 ">
            <form  action="{{url('/department')}}" method="POST">
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

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text">number_of_employess</span>
                </div>
                <input name="number_of_employess" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Mgr_id </label>
                    </div>
                    <select class="custom-select" name="employee_id" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                        @foreach($employees as $employee)
                        <option value="{{$employee->id}}">
                            {{$employee->name}}
                        </option>
                        @endforeach
                    </select>

                </div>
            </div>

            <input type="submit" value="store" class="btn create-button  mt-2 text-capitalize">
            </form>
        </div>
    </div>

@endsection
