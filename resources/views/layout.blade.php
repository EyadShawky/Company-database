<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/Untitled-1.png"/>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('page-style')


    <style>
        a {
            color: white;
            text-decoration: none;
            text-decoration-line: none;
        }

        a:hover {
            color: white;
            text-decoration-line: none;
        }
    </style>
</head>

<body>


<header>

        <div class="container-fluid">


            <div class="row flex-wrap">
                <div class="side-nav-conatiner ">
                <div class=" col-auto col-lg-5 col-md-4 min-vh-100 ">
                    <div class=" p-2  text-white">


                        <a class="d-flex text-decoration-none align-items-center">
                <span class="fs-4 d-none d-sm-inline">
                    Company<span class="db-color">DB</span>
                </span>
                        </a>

                        <ul class="nav nav-pills flex-column mt-4">
                            <li class="nav-item">
                                <a href="/employees" class="nav-link">
                                    <span class="fs-4 ms-3 d-none d-sm-inline">Employee</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/department" class="nav-link">
                                    <span class="fs-4 ms-3 d-none d-sm-inline">Department</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/project" class="nav-link">
                                    <span class="fs-4 ms-3 d-none d-sm-inline">Projects</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/dependent" class="nav-link">
                                    <span class="fs-4 ms-3 d-none d-sm-inline">Dependent</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/depts-locations" class="nav-link">
                                    <span class="fs-4 ms-3 d-none d-sm-inline">depts</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/works-on" class="nav-link">
                                    <span class="fs-4 ms-3 d-none d-sm-inline">works-on</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>



<!--Main layout-->

<main class="pos-main-layout">

</main> @yield('content')


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script>
    $(function (){
        $( ".datepicker").datepicker();
    });
</script>
@yield('page-scripts')
</body>

</html>



