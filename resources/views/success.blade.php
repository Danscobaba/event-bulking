<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <title>Regiastration Success</title>
    <style>

        .receipt {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: url("{{asset('img/logo.png')}}") no-repeat;
            background-position: center;
            background-size: contain;

        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #333;
        }

        .details {
            margin-bottom: 20px;
            padding: 10px;
        }


        .items {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 10px;
            font-family: "Bodoni MT";
            font-weight: 600;
            line-height: 150%;

        }

        .hu{
            background: rgba(255, 255, 255, 0.8);
            padding: 12px;
        }
        .items p{
            font-size: 14px;
            font-family: "Bodoni MT";
            font-weight: 600;
            line-height: 150%;
            text-align: justify;
        }

        .details p{
            font-size: 14px;
            font-family: "Bodoni MT";
            font-weight: 600;
            line-height: 150%;
            text-align: justify;
        }

        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-family: "Bodoni MT";
            font-weight: 600;
            line-height: 150%;
        }

        .item span {
            flex: 1;
            font-family: "Bodoni MT";
            font-weight: 600;
            line-height: 150%;
        }

        .total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }

        .total span {
            flex: 1;
        }

        .thank-you {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>
<body>
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
        <div class="container">
            <div class="card">
                <h3 class="head">Registration Completed</h3>
                <p style="text-align: left"><strong>Dear </strong> {{$data->full_name}}</p>
                <p>Congratulations, You have successfully registered for the 2023 Faitheroic Global (Ignite) Team Directors Dinner.</p>
                <p>Below are your payment details</p>
                <p><strong>Amount:</strong> {{$data->amount}}</p>
                <p><strong>Transaction ID:</strong> {{$data->reference_id}}</p>
                <div class="btn-print">
                    <button onclick="convertToPdf()">Print Receipt</button>
                </div>

            </div>

        </div>
        <div class="pdfContent" >
            <div class="receipt" id="pdfContent">
                <div class="hu">
                <div class="header">
                    <h1>Receipt</h1>
                </div>



                <div class="items">
                    <p style="text-align: left"><strong>Dear </strong> {{$data->full_name}}</p>
                    <p>Congratulations, You have successfully registered for the 2023 Faitheroic Global (Ignite) Team Directors Dinner and you have successfully made a payment of [amount]</p>
                    <p>Below are your payment details</p>

                </div>
                <div class="details">
                    <p><strong>Date:</strong> {{$data->created_at}}</p>
                    <p><strong>Reference:</strong> {{$data->reference_id}}</p>
                    <p><strong>Amount:</strong> NGN{{$data->amount}}.00</p>
                    <p><strong>Transaction ID:</strong> {{$data->transaction_id}}</p>
                </div>

                <div class="thank-you">
                    <p>Thank you for your registration!</p>
                </div>
                </div>
            </div>
        </div>

    </div>

<script>
    // var element = document.getElementById('pdfContent');

    // Function to convert HTML content to PDF
    function convertToPdf() {
        var element = document.getElementById('pdfContent');
        // html2pdf(element);
        var opt = {
            margin:       1,
            filename:     '{{$data->full_name}}.pdf',
            image:        { type: 'jpeg', quality: 1 },
            html2canvas:  { scale: 1 },
            jsPDF:        { unit: 'in', format: 'a5', orientation: 'portrait' }
        };

// New Promise-based usage:
        html2pdf().set(opt).from(element).save();
    }
</script>
</body>
</html>
