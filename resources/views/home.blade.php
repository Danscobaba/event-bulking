<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | Faitheroic Global (Ignite) Team Directors Dinner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/anmate.css') }}" rel="stylesheet">


</head>

<body>
    @vite('resources/scss/app.scss')


    <div class="hero-section">
        <div class="hero-section-two animate animate__fadeInRightBig" data-animate="fadeInRightBig" data-duration="1s"
            data-delay="0.5s" data-offset="100" data-iteration="1">
            <img class="ellipse-first" src="{{ asset('img/Ellipse.svg') }}" alt="">
            <img class="ellipse-second" src="{{ asset('img/Ellipse.svg') }}" alt="">
            <img class="ring1" src="{{ asset('img/ring.svg') }}" alt="">
            <img class="ring2" src="{{ asset('img/ring.svg') }}" alt="">
            <img class="ring3" src="{{ asset('img/ring.svg') }}" alt="">
            <img class="ring4" src="{{ asset('img/ring.svg') }}" alt="">

            <div class="logo">
                <img onclick="location.href='{{ url('/') }}'" src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <h4 class="head">Faitheroic Global (Ignite) Team Directors Dinner</h4>
            <p class="desc">Join us for an evening of networking and celebration</p>
            <p class="details">
                We are excited to invite you to the Faitheroic Global (Ignite) Team Directors Dinner, an exclusive event
                to
                recognize and celebrate the accomplishments of our esteemed team directors. This special evening
                will
                provide an opportunity to connect with colleagues from around the world, share experiences, and
                build
                stronger relationships.
            </p>
            <div class="" style="display:flex; justify-content-center">
                <button onclick="location.href='{{ url('/register') }}'" class="btn-reg">REGISTER NOW!!!</button>

            </div>
        </div>


    </div>
    @php
        $totalReg = DB::table('member')->get();
    @endphp
    <div class="div-count">
        <h5 class="no-reg">Only <span>{{count($totalReg)}}</span> Registrations So Far</h5>
        <div class="daytogo" id="day">

        </div>
    </div>
    <div class="second-section animate animate__fadeInRightBig" data-animate="fadeInRightBig" data-duration="1s"
        data-delay="0.5s" data-offset="100" data-iteration="1">
        <img class="ellipse-second" src="{{ asset('img/Vector.png') }}" alt="">
        <img class="ring1" src="{{ asset('img/ring.svg') }}" alt="">
        <img class="ring2" src="{{ asset('img/ring.svg') }}" alt="">
        <div class="board">
            <h4>EVENT DETAILS</h4>
            <h6>Date: December 20th, 2023 <br>Time: 4:00PM <br>Location: Osogbo</h6>
            <button class="btn-reg" onclick="location.href='{{ url('/register') }}'">REGISTER NOW!!!</button>

        </div>
        <div class="image">
            <img src="{{ asset('img/group-first.jpeg') }}" alt="">
        </div>
    </div>

    <div class="third-section animate animate__fadeInRightBig" data-animate="fadeInRightBig" data-duration="1s"
        data-delay="0.5s" data-offset="100" data-iteration="1">
        <img class="ellipse-first" src="{{ asset('img/Vector.png') }}" alt="">
        <img class="ellipse-second" src="{{ asset('img/hori.png') }}" alt="">

        <img class="ring3" src="{{ asset('img/ring.svg') }}" alt="">
        <img class="ring4" src="{{ asset('img/ring.svg') }}" alt="">
        <div class="image">
            <img src="{{ asset('img/image1.jpeg') }}" alt="">
        </div>
        <div class="image">
            <img src="{{ asset('img/image2.jpeg') }}" alt="">
        </div>
        <div class="image">
            <img src="{{ asset('img/image3.jpeg') }}" alt="">
        </div>
    </div>
    <div class="div-count">
        <p>Copyright 2023 ©FaitheroicGlobal.com. All Rights Reserved. </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('js/jquery.scrolla.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // $('.animate').scrolla();
            var countDownDate = new Date("Dec 20, 2023 23:59:59").getTime();

            // Update the countdown every 1 second
            var countdownInterval = setInterval(function() {

                // Get the current date and time
                var now = new Date().getTime();

                // Calculate the time remaining
                var distance = countDownDate - now;

                // Calculate days, hours, minutes, and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the countdown
                // $("#day").html(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");
                $("#day").html(`<h4 class="day" >${days}</h4>
            <h5 class="text">${days == 1 ? 'day' : 'Days'} to go</h5>`)
            }, 1000);
        });
    </script>
</body>

</html>
