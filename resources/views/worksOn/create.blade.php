@extends('layout')

@section('title')
    Add worksOn
@endsection

@section('content')
    <div class="pos-main-layout pl-5">
        <h1 class="mb-3 bg-add">Add worksOn</h1>

        <div class="mt-4 ">
            <form  action="{{url('/works-on')}}" method="POST">
                @csrf

            <div class="input-group mb-3 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">whours</span>
                </div>
                <input name="whours" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


             <div class="input-group mb-3 w-100">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Employee </label>
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
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Projects </label>
                    </div>
                    <select class="custom-select" name="project_id" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                        @foreach($projects as $project)
                        <option value="{{$project->id}}">
                            {{$project->name}}
                        </option>
                        @endforeach
                    </select>

                </div>
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
