<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Career Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Background color */
            color: #fff;
            /* Text color */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            /* White background for content */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            color: #333;
            /* Text color inside the container */
        }

        h2 {
            color: #fff;
            /* Heading color */
            text-align: center
        }

        p {
            line-height: 1.6;
            color: #fff;
            /* Improve readability */
        }

        strong {
            font-size: 18px;
            color: #fff;
            /* Color for strong elements */
        }

        a {
            color: white !important
        }

        a:hover {
            color: #9F47C1
        }

        a.download-link {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #9F47C1;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        a.download-link:hover {
            background-color: #7d379a;
            color: white !important
        }

        img {
            display: block;
            margin: 0 auto
        }

        .footer p {
            text-align: center
        }
    </style>
</head>

<body>
    <div class="container" style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364);">
        <img class="mb-4" src="https://al-awafy.koreintl.com/assets/images/logo/logo.png" alt="">
        <h2>New Contact Request from {{ $data['name'] }}</h2>
        <hr size="10" color="#fff">
        <p><strong>Email : </strong> {{ $data['email'] }}</p>
        <p><strong>Phone : </strong> {{ $data['phone'] }}</p>


        <div class="message">
            <p><strong>Message : </strong>{{ $data['message'] }}</p>
        </div>
        <hr size="10" color="#fff">
        <div class="footer">
            <p>This is an automated message. Please do not reply.</p>
        </div>
    </div>
</body>

</html>
