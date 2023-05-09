@extends('layout')

@section('title')
    Add Employee
@endsection

@section('content')
    <div class="pos-main-layout pl-5">
        <h1 class="mb-3 bg-add">Add Employee</h1>

        <div class="mt-4 ">
            <form  action="{{url('/employees')}}" method="POST">
                @csrf
            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
                </div>
                <input name="Fname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
                </div>
                <input name="Mname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
                </div>
                <input name="Lname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
                </div>
                <input name="Address" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Department</label>
                </div>
                @foreach($departments as $department)
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="department_id" value="{{$department->id}}" >
                    <label class="form-check-label" for="inlineRadio1">{{$department->name}}</label>
                </div>
                @endforeach
               
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">super_ssn </label>
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



            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Sex</label>
                </div>
                <div class="form-check form-check-inline ml-3">
                    <input class="form-check-input" type="radio" name="Sex" value="1" >
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Sex" value="2" >
                    <label class="form-check-label" for="inlineRadio1">Female</label>
                </div>
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text">Birth date</span>
                </div>
                <input id="birthday" type="date" class="form-control date-picker" name="Bdate" value="{{ old('birthday') }}">
            </div>

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text">$alary</span>
                </div>
                <input name="salary" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            </div>

            <input type="submit" value="store" class="btn create-button  mt-2 text-capitalize">
            </form>
        </div>
    </div>

    <script>
        $('.date-picker').datepicker({
            format: 'yy/mm/dd',
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endsection
