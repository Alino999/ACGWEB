<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ACG_immobilier</title>
        <link rel="stylesheet" href="/assets/css/vendor.css" type="text/css" media="all">
        <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://www.goodsky.com.au/wp-content/themes/x/framework/fonts/font_awesome/fontawesome-webfont.ttf?v=4.7.0" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

        <link rel="icon" href="/assets/images/favicon.png">
    </head>
    <body class="home">

        @include('frontend.header')

        <div class="container-fluid">
            @yield('content')
        </div>

        @include('frontend.footer')
        @include('frontend.sidebare')
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWk2I6T6psDLCXg8CDVFSEXvigfNU1V-E&libraries=places&sensor=false" async defer></script>

        <script src="/assets/js/vendor.js"></script>
        <script src="/assets/js/app.js"></script>

        <script src="/assets/js/gmap3.js"></script>
        <script src="/assets/js/overlappingmarkerspiderfier.js"></script>
        <script src="/assets/js/populate-map.js"></script>
        <script src="/assets/js/infobox.js"></script>
    </body>
</html>
