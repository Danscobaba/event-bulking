<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <style>

    </style>
</head>

<body>


    @vite(['resources/scss/app.scss'])



    <div class="hero-section" style="height: 100vh">

        <div class="hero-section-two">
            <img class="ellipse-first" src="{{ asset('img/Ellipse.svg') }}" alt="">
            <img class="ellipse-second" src="{{ asset('img/Ellipse.svg') }}" alt="">
            <img class="ring1" src="{{ asset('img/ring.svg') }}" alt="">
            <img class="ring2" src="{{ asset('img/ring.svg') }}" alt="">
            <img class="ring3" src="{{ asset('img/ring.svg') }}" alt="">
            <img class="ring4" src="{{ asset('img/ring.svg') }}" alt="">

            <div class="logo">
                <img onclick="location.href='{{ url('/') }}'" src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="form">
                <h5>Welcome Back, Please Login!!!</h5>
                <p>Please fill in the form below to login</p>
                @if (session()->has('error'))
                    <div class="alert alert-danger text-center error" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success text-center error" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <form id="submit-form" action="{{ url('login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" autocomplete="off" name="email" id="email"
                            placeholder="Enter your email address" class="custom-input">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" autocomplete="new-password"
                            placeholder="Enter your password" class="custom-input">
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit_btn" class="submit-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {



        });
    </script>

</body>

</html>
