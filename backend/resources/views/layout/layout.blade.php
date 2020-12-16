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
            <li><a href="https://wa.me/+905338489156" data-toggle="tooltip" data-placement="left" title="Write to us on Whatsapp" rel="external nofollow" target="_blank"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-whatsapp"></i></a></li>
{{--            <li><a href="{{ config('app.social_fb') }}" target="_blank" data-toggle="tooltip" data-placement="left" title="Follow us on Facebook" rel="external nofollow" target="_blank"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-facebook"></i></a></li>--}}
            <li><a href="{{ config('app.social_tw') }}" target="_blank" data-toggle="tooltip" data-placement="left" title="Follow on Twitter" rel="external nofollow" target="_blank"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-twitter"></i></a></li>
{{--            <li><a href="{{ config('app.social_li') }}" target="_blank" data-toggle="tooltip" data-placement="left" title="Follow on LinkedIn" rel="external nofollow" target="_blank"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-linkedin"></i></a></li>--}}
            <li><a href="{{ config('app.social_ins') }}" target="_blank" data-toggle="tooltip" data-placement="left" title="Follow on Instagram" rel="external nofollow" target="_blank"><i class="c2alisicons icons-sprite sprite-24-socialmedia icons-instagram"></i></a></li>
        </ul>
    </div>
    <!-- Sticky C2A Side End -->

    <x-layout-ticker/>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5fd9c4f9a8a254155ab3d161/1eplaisen';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- JavaScript Start -->
    <script id="script-owl-carousel" src="/assets/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
    <script id="script-custom-app" src="/assets/dist/js/custom-app.js"></script>
    <!-- JavaScript End -->

    @yield('script')
</body>
</html>
