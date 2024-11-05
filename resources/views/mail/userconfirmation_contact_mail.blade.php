<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission Confirmation</title>
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
    <div class="container"
        style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364); color: #fff; padding: 20px; font-family: Arial, sans-serif;">
        <img alt="Logo" src="{{asset('assets/images/logo/logo.png')}}" class="w-100 h-50px">


        <h2>Thank you for contacting Alawafy!</h2>
        <hr size="2" color="#fff" style="margin: 20px 0;">
        <div class="content" style="line-height: 1.6;">
            <p>Dear {{ $data['name'] }},</p>
            <p>We have received your message. One of our team members will be in touch with you shortly to assist you
                further.</p>
            <p>Best Regards,<br>Al Awafy Team</p>
        </div>
        <hr size="2" color="#fff" style="margin: 20px 0;">
        <div class="footer" style="text-align: center; font-size: 12px; color: #cccccc;">
            <p>This is an automated message. Please do not reply.</p>
        </div>
    </div>

</body>

</html>
