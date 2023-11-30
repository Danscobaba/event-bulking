<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <title>REGISTER</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <style>
        body {
            position: relative;

        }

        .spin-box {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.4);
            z-index: 999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 56px;
            height: 56px;
            display: grid;
            color: #BD362F;
            background: linear-gradient(currentColor 0 0) center/100% 3.4px,
                linear-gradient(currentColor 0 0) center/3.4px 100%;
            background-repeat: no-repeat;
            animation: spinner-slq5ph 2s infinite;
        }

        .spinner::before,
        .spinner::after {
            content: "";
            grid-area: 1/1;
            background: repeating-conic-gradient(#0000 0 35deg, currentColor 0 90deg);
            -webkit-mask: radial-gradient(farthest-side, #0000 calc(100% - 3.4px), #000 0);
            border-radius: 50%;
        }

        .spinner::after {
            margin: 20%;
        }

        @keyframes spinner-slq5ph {
            100% {
                transform: rotate(1turn);
            }
        }
    </style>
</head>

<body>

    <div class="spin-box">
        <div class="spinner"></div>
        <p style="color:#BD362F; font-weight: 700; font-size: 1.2rem ">Please wait...</p>
    </div>
    @vite('resources/scss/app.scss')


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
                <h5>Register Now!!!</h5>
                <p>Please fill in the form below to register</p>
                <form id="submit-form" autocomplete="off">
                    {{--                @csrf --}}
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" autocomplete="off" id="fullname" placeholder="Enter your full name"
                            class="custom-input">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" autocomplete="off" id="email" placeholder="Enter your email address"
                            class="custom-input">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="" id="gender" class="custom-input">
                            <option value="">Choose one...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Phone No.</label>
                        <input type="text" id="phone_no" placeholder="Enter your mobile no." class="custom-input">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="" id="status" class="custom-input">
                            <option value="">Choose one</option>

                        </select>
                    </div>
                    <input type="number" hidden id="amount">
                    <div class="form-group">
                        <button type="submit" id="submit_btn" class="submit-btn">Register</button>
                    </div>
                </form>
            </div>
        </div>


    </div>


    @php
        $data = DB::table('payment_settings')
            ->where('id', 1)
            ->first();

    @endphp
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        const statusData = [{
                id: 1,
                name: 'Director'
            },
            {
                id: 2,
                name: 'Emerald Director'
            },
            {
                id: 3,
                name: 'Sapphire Director'
            },
            {
                id: 4,
                name: '1 Ruby Director'
            },
            {
                id: 5,
                name: '2Ruby Director'
            },
            {
                id: 6,
                name: '3Ruby Director'
            },
            {
                id: 7,
                name: '4Ruby Director'
            },
            {
                id: 8,
                name: '5Ruby Director'
            },
            {
                id: 9,
                name: '1 Diamond Director'
            }

        ]
        const statusOption = document.getElementById('status');
        statusData.forEach(element => {
            // Create a new option element
            var opt = document.createElement('option');

            // Set the text content of the option
            opt.textContent = element.name;

            // Set the value attribute of the option (optional)
            opt.value = element.id;

            // Append the option to the <select> element
            statusOption.appendChild(opt);

            // statusOption.appendChild(`<option value="${element.id}">${element.name}</option>`);
        });


        function paymentAmount(item) {

            let amount = 0;
            if (item == 1) {
                amount = 12000
            } else if (item == 2) {
                amount = 12000
            } else if (item == 3) {
                amount = 15000
            } else if (item == 4) {
                amount = 20000
            } else if (item == 5) {
                amount = 30000
            } else if (item == 6) {
                amount = 30000
            } else if (item == 7) {
                amount = 50000
            } else if (item == 8) {
                amount = 50000

            } else if (item == 9) {
                amount = 50000
            }

            return amount;
        }


        $(document).ready(function() {
            $(".spin-box").hide();
            $('#status').change(function(e) {
                e.preventDefault();
                console.log("change", e.target.value);
                const choice = e.target.value;
                const amount = paymentAmount(choice);

                // console.log(amount);

                $("#amount").val(amount);
                var formattedAmount = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'NGN' // Change the currency code as needed
                }).format(amount);
                $("#submit_btn").text(`Pay ${formattedAmount} Now`);
            });

            $("#submit-form").submit((e) => {
                e.preventDefault();

                const email = $("#email").val();
                const fullname = $("#fullname").val();
                const phone_no = $("#phone_no").val();
                const gender = $("#gender").val();
                const status = $("#status").val();
                const amount = $("#amount").val();
                if (email === "") {
                    showError("Please enter your email address");
                    return;
                } else if (fullname === "") {
                    showError("Please enter your full name");
                    return;
                } else if (phone_no === "") {
                    showError("Please enter your phone number");
                    return;
                } else if (gender === "") {
                    showError("Please choose your gender");
                    return;
                } else if (status === "") {
                    showError("Please choose your status");
                    return;
                } else {
                    $(".spin-box").show();

                    var csrfToken = document.head.querySelector(
                                'meta[name="csrf-token"]').content;
                    $.ajax({
                                type: "post",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                url: "{{ url('check_email') }}",
                                data: {
                                    _token: csrfToken,
                                    email: email,

                                },

                                success: function(datas) {
                                    if (datas.code === 201) {
                                        $(".spin-box").hide();
                                        showError("Email Already Exist");
                                    }else{
                                        $(".spin-box").hide();

                                        let handler = PaystackPop.setup({
                        key: "{{ $data->public_key }}", // Replace with your public key
                        email: email,
                        amount: amount * 100,
                        ref: Math.floor((Math.random() * 1000000000) +
                            1
                        ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                        // label: "Optional string that replaces customer email"
                        onClose: function() {
                            alert('Window closed.');
                        },
                        callback: function(response) {
                            $(".spin-box").show();

                            var csrfToken = document.head.querySelector(
                                'meta[name="csrf-token"]').content;
                            $.ajax({
                                type: "post",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                url: "{{ url('register') }}",
                                data: {
                                    _token: csrfToken,
                                    fullname: fullname,
                                    email: email,
                                    gender: gender,
                                    status: status,
                                    amount: amount,
                                    phone_no: phone_no,
                                    reference_id: response.reference,
                                    transaction_id: response.transaction
                                },

                                success: function(data) {
                                    if (data.code === 201) {
                                        $(".spin-box").hide();

                                        window.location.href =
                                            `/success/${response.reference}`;
                                    }
                                },
                            });

                        }
                    });

                    handler.openIframe();
                                    }
                                },
                            });


                }


            })

        });
    </script>

</body>

</html>
