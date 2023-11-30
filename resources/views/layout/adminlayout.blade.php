<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- link'resources/css/app.css' --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body>

    @vite('resources/scss/admin.scss')
    <div class="admin-layout">
        <div class="admin-sidebar" style="overflow-y: auto !important; min-height:90vh ">
            <div class="side-logo px-3 text-center">
                <img src="{{ asset('img/logo.png') }}" class="mx-auto" height="auto" width="120px" alt="">
            </div>
            <hr style="background: rgb(162, 84, 84); height:2px">
            <div class="side-item">

                <li
                    class="{{ request()->is('admin/dashboard*') ? 'active' : (request()->is('admin') ? 'active' : '') }}">
                    <a href="{{ route('admin.dashboard') }}" class="link-text"><span style="margin: 0 12px 0 0"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30"
                                fill="none">
                                <path
                                    d="M6.25 13.75H11.25C12.625 13.75 13.75 12.625 13.75 11.25V6.25C13.75 4.875 12.625 3.75 11.25 3.75H6.25C4.875 3.75 3.75 4.875 3.75 6.25V11.25C3.75 12.625 4.875 13.75 6.25 13.75Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.25 26.25H11.25C12.625 26.25 13.75 25.125 13.75 23.75V18.75C13.75 17.375 12.625 16.25 11.25 16.25H6.25C4.875 16.25 3.75 17.375 3.75 18.75V23.75C3.75 25.125 4.875 26.25 6.25 26.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.25 6.25V11.25C16.25 12.625 17.375 13.75 18.75 13.75H23.75C25.125 13.75 26.25 12.625 26.25 11.25V6.25C26.25 4.875 25.125 3.75 23.75 3.75H18.75C17.375 3.75 16.25 4.875 16.25 6.25Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.75 26.25H23.75C25.125 26.25 26.25 25.125 26.25 23.75V18.75C26.25 17.375 25.125 16.25 23.75 16.25H18.75C17.375 16.25 16.25 17.375 16.25 18.75V23.75C16.25 25.125 17.375 26.25 18.75 26.25Z"
                                    fill="currentColor" />
                            </svg></span> <span>Dashboard</span></a>
                </li>

                <li class="{{ request()->is('admin/payment-setting*') ? 'active' : '' }}">
                    <a href="{{ route('admin.payment-setting') }}" class="link-text" href=""><span
                            style="margin: 0 12px 0 0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-credit-card" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                        </span> <span>Payment Setting</span></a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" class="link-text" href=""><span
                            style="margin: 0 12px 0 0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg></span> <span>Logout</span></a>
                </li>



            </div>
        </div>
        <div class="admin-section-head">
            <div class="admin-head">

                <div class="menu-btn">
                    <i class="bi bi-list"></i>
                </div>
                {{-- <div class="flex align-items-center">
                    <h4>Logout</h4>
                </div> --}}

            </div>
            <div class="admin-content">
                <div class="container-fluid">
                    @yield('master-admin')
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        // $("div.toggle").hide();
        let toggle = false;


        if ($(window).width() < 961) {
            $(".admin-layout .admin-sidebar").addClass('active');

$(".admin-layout .admin-section-head").addClass('active');



        } else {
            $(".admin-layout .admin-sidebar").removeClass('active');

$(".admin-layout .admin-section-head").removeClass('active');

        }
        $(window).resize(function() {
            if ($(window).width() < 961) {

                $(".admin-layout .admin-sidebar").addClass("active");
                $(".admin-layout .admin-section-head").addClass("active");


            } else {
                // $("div.menu-btn i").hide();
                // $(".conta").css("display", "flex");
                $(".admin-layout .admin-section-head").removeClass("active");
                $(".admin-layout .admin-sidebar").removeClass("active");

                toggle = false;

            }
        });
        $('div.menu-btn i').click(function() {

            if (!toggle) {
                $(".admin-layout .admin-sidebar").addClass('active');

                $(".admin-layout .admin-section-head").addClass('active');


                // $(".admin-layout .admin-section-head").addClass("active");
                toggle = true;

            } else {


                $(".admin-layout .admin-sidebar").removeClass('active');

$(".admin-layout .admin-section-head").removeClass('active');


                toggle = false;
            }

        });
    </script>

</body>

</html>
