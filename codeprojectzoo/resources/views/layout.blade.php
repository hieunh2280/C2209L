<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>
            @yield('title', 'default')
        </title>
    </head>
    <body>
        <header class="m-3">
            <a class="navbar-brand" href="{{url('/')}}">
                Logo
            </a>
        </header>
        <nav class="navbar navbar-expand-sm bg-light">
            <button class="navbar-toggler ms-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center ms-3 me-3" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/plan-a-visit')}}">
                            Plan A Visit
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/ticket')}}">
                            Ticket
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/animal')}}">
                            Animal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/gallery')}}">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="m-3 container">
            @yield('content', 'default')
        </div>
        <footer class="m-3">
            Footer
        <footer>
    </body>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>