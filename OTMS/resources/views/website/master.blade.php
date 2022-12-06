<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-white navbar-white shadow">
    <div class="container">
        <a href="" class="navbar-brand"><strong>PULOCK</strong></a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Training Category</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('training.category')}}" class="dropdown-item">Web Design</a></li>
                    <li><a href="{{route('training.category')}}" class="dropdown-item">Web Development</a></li>
                </ul>
            </li>
            <li><a href="{{route('training.all')}}" class="nav-link">All Training</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('loginRegistration')}}" class="nav-link">Login</a></li>

        </ul>
    </div>
</nav>


@yield('body')


<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-white h-100 border-0">
                    <h1 class="">OTMS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa fugit, in mollitia odit placeat quasi quod tempora? Delectus deleniti ea impedit ipsam minima minus natus quae rem sequi similique.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-white h-100 border-0">
                    <h1 class="">Popular Training</h1>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href=""> PHP With Laravel Fremwork</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> PHP With Laravel Fremwork</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> PHP With Laravel Fremwork</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> PHP With Laravel Fremwork</a></li>
                    </ul>
                    </div>
            </div>
            <div class="col-md-3">
                <div class="text-white h-100 border-0">
                    <h3 class="">Contact With Us</h3>
                    <address>
                        House No - 543/1 South Monipur, Mirpur-2, Dhaka=1216.
                    </address>
                    <h3>Follow Us</h3>
                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="text-white mt-4" />
        <div class="row">
            <div class="col mt-3">
                <p class="text-white text-center mb-0">copyright@mushahedur all right reserved</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('/') }}website/js/bootstrap.bundle.js"></script>
<script src="{{ asset('/') }}website/js/jquery-3.6.1.min.js"></script>
</body>
</html>

