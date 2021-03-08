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
                @guest
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="#">BitCode</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('home')}}">Home</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('approveuser')}}">Pending User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('student')}}">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('viewstudent')}}">View Student</a>
                </li>
                @endauth
                
            </ul>
        </div>
        <div class="d-flex justify-content-end collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ">
                @auth
                <li class="nav-item ">
                    <a class="nav-link text-white bg-dark" href="{{route('logout')}}">Logout</a>
                </li>    
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('login')}}">Login</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white bg-dark" href="{{route('register')}}">Register</a>
                </li>
                @endguest
                
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>