<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
        integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="{{asset('site')}}/styles/pages/main.css">

    <title>Document</title>
</head>

<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{url('/')}}">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button" href="{{url('/')}}">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{url('/majors')}}">Majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{url('/doctor')}}">Doctors</a>
                        @guest
                        <a type="button" class="btn btn-outline-light navigation--button" href="{{Route('auth.login')}}">Login</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="{{Route('auth.register')}}">Register</a>
                        @endguest
                        @auth
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-light navigation--button">Logout</button>
                        </form>
                        @endauth
                        
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')


        <footer class="container-fluid bg-blue text-white py-3">
            <div class="row gap-2">
    
                <div class="col-sm order-sm-1">
                    <h1 class="h1">About Us</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                        laborum
                        saepe
                        enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                        cum
                        iure
                        quod facere.</p>
                </div>
                <div class="col-sm order-sm-2">
                    <h1 class="h1">Links</h1>
                    <div class="links d-flex gap-2 flex-wrap">
                        <a href="{{url('/')}}" class="link text-white">Home</a>
                        <a href="{{url('/majors')}}" class="link text-white">Majors</a>
                        <a href="{{url('/doctor')}}" class="link text-white">Doctors</a>
                        <a href="{{Route('auth.login')}}" class="link text-white">Login</a>
                        <a href="{{Route('auth.register')}}" class="link text-white">Register</a>
                        <a href="{{url('/contact')}}" class="link text-white">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
            integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('site')}}/scripts/home.js"></script>
    </body>
    
    </html>