@props(['pageTitle'=> 'Al Aawafy', 'metaDescription'=> 'Al Aawafy', 'metaKeywords'=>'', 'metaImage'=>'' , 'canonical'=>'Al Aawafy'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>


    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="">
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">


    {{-- meta description  --}}
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="food peanuts almonds crico alyoum alawafy">
    <meta name="base-url" content="https://al-awafy.koreintl.com">
    <meta property="og:title" content="Al-Awafy" />
    <meta property="og:image" content="https://al-awafy.koreintl.com/assets/images/logo/logo.png" />
    <meta name="robots" content="follow, index" />
    <link rel="canonical" href="{{$canonical}}" />
    <meta property="og:locale" content="en_UK" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{$canonical}}" />
    <meta property="og:site_name" content="Al-Awafy" />
    <meta name="author" content="">
    <meta name="description" property="og:description" content="">
    <!-- meta description end -->


    <link rel="apple-touch-icon" sizes="120x120" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="">
    <link rel="mask-icon" href="" color="#5bbad5">
    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css') }}">
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo/logo.png') }}" type="image/x-icon">

    <!-- custom styles  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>





    <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "ProfessionalService",
              "name": "Al-Awafy",
              "image": "https://al-awafy.koreintl.com/assets/images/logo/logo.png",
              "@id": "",
              "url": "https://al-awafy.koreintl.com/",
              "telephone": "+213-557-666-888",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "ZEA 1 ère Tranche N°06 -",
                "addressLocality": "Setif",
                "postalCode": "",
                "addressCountry": "DZ"
              },
              "geo": {
                "@type": "GeoCoordinates",
                "latitude": 36.17645,
                "longitude": 5.41553
              },
              "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                  "Monday",
                  "Tuesday",
                  "Wednesday",
                  "Thursday",
                  "Friday",
                  "Saturday",
                  "Sunday"
                ],
                "opens": "00:00",
                "closes": "23:59"
              },
              "sameAs": [
                "https://www.facebook.com/people/Alawafy-%D8%A7%D9%84%D8%B9%D9%88%D8%A7%D9%81%D9%8A/100095340142490/",
                "https://www.instagram.com/alawafy_algeria/",
                "https://api.whatsapp.com/send/?phone=213557666888&text&type=phone_number&app_absent=0"
              ]
            }
            </script>
    <script type="application/ld+json">
                {
                    "@context": "https://schema.org/",
                    "@type": "WebSite",
                    "name": "Alawafy",
                    "url": "https://al-awafy.koreintl.com/",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "{search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                }
        </script>

</head>
