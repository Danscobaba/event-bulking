<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Successful</title>
    <style>
        /* Add your email styles here */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .header {
            background-color: #ff6633;
            color: #FFF;
            text-align: center;
            padding: 10px;
            /*padding: 10px;*/
        }

        .content {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #ff6633;
            color: #FFF;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header" style="padding: 10px; ">
            <h1 style="text-align: center; color: white; font-weight: 700">Event Registration Successful</h1>
        </div>

        <div class="content">
            <p>Hello {{$mailData['fullname']}},</p>


            <p>Congratulations! Your registration for Faitheroic Global (Ignite) Team Directors Dinner was successful. We're delighted to have you join us for an evening of networking and celebration.</p>

            <p><strong>Event Details:</strong></p>
            <ul>
                <li><strong>Date:</strong> December 20th, 2023</li>
                <li><strong>Time:</strong> 4:00PM</li>
                <li><strong>Location:</strong> Osogbo, Osun State</li>
            </ul>

            <p><strong>Payment Details:</strong></p>
            <ul>
                <li><strong>Amount:</strong>{{$mailData['amount']}}</li>

                <li><strong>Date:</strong> {{now(1)}} </li>

                <li><strong>Transaction Id: </strong>{{$mailData['transaction_id']}}</li>
            </ul>

            <p>We look forward to sharing meaningful conversations, connecting with like-minded individuals, and making this event a memorable experience for you.</p>

            <p>Thank you for being part of this year special occasion. We can't wait to see you there!</p>

            <p>Best regards,<br>Your Faitheroic Global (Ignite) Team Directors</p>

        </div>
    </div>
</body>
</html>
