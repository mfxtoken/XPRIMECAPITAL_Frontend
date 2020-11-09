<!doctype html>
<html lang="en">
<head>
    <title>XPRIMECAPITAL</title>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=620">
    <link rel="shortcut icon" href="/assets/img/icons/favicon.ico" type="image/x-icon" sizes="32x32" />
    <link id="css-custom-app" rel="stylesheet" href="/assets/dist/css/custom-app.css">
    <script id="script-jquery" src="/assets/cdn/jquery/jquery.3.5.1.min.js"></script>
    <script id="script-popper" src="/assets/cdn/popper/popper.1.16.1.min.js"></script>
    <script id="script-bootstrap" src="/assets/cdn/bootstrap/bootstrap.4.5.2.min.js"></script>
</head>
<body>
    <x-layout-header />

    @yield('content')

    <x-layout-footer />

    <!-- Sticky C2A Side Start -->
    <div class="stickyside-c2a">
        <ul class="sitec2aarea">
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Follow us on Facebook" rel="external nofollow"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-facebook"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Follow on Twitter" rel="external nofollow"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-twitter"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Follow on LinkedIn" rel="external nofollow"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-linkedin"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Follow on Instagram" rel="external nofollow"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-instagram"></i></a></li>
        </ul>
    </div>
    <!-- Sticky C2A Side End -->
    <x-layout-ticker/>

    <!-- JavaScript Start -->
    <script id="script-owl-carousel" src="/assets/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
    <script id="script-custom-app" src="/assets/dist/js/custom-app.js"></script>
    <!-- JavaScript End -->

    @yield('script')
</body>
</html>
