<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>User Management</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class=" d-flex justify-content-start collapse navbar-collapse " id=" navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="#">BitCode</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('approveuser')}}">Approve User</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ">

                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{'login'}}">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white bg-dark" href="#">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('register')}}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>