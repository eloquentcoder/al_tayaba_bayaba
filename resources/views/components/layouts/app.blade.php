<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">


<!-- Mirrored from wealthguros.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 11:22:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="AL Tayaba International - Grow Wealth, Know Your Worth">
    <meta name="keywords" content="AL Tayaba International, emr, investment, invest, Investment Management Company,">
    <link rel="shortcut icon" href="assets/uploads/logo/logo.png" type="image/x-icon">

    <link rel="apple-touch-icon" href="assets/uploads/logo/logo.png">
    <title>AL Tayaba International | Home</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/uploads/logo/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="AL Tayaba International | Home">

    <meta itemprop="name" content="AL Tayaba International | Home">
    <meta itemprop="description" content="AL Tayaba International - Grow Wealth, Know Your Worth">
    <meta itemprop="image" content="assets/uploads/logo/meta.html">

    <meta property="og:type" content="website">
    <meta property="og:title" content="AL Tayaba International - Grow Wealth, Know Your Worth">
    <meta property="og:description" content="AL Tayaba International - Grow Wealth, Know Your Worth">
    <meta property="og:image" content="assets/uploads/logo/meta.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="index.html">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/deepblack/assets/bootstrap/bootstrap.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/deepblack/assets/plugins/owlcarousel/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/deepblack/assets/plugins/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/deepblack/assets/plugins/owlcarousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/deepblack/assets/plugins/aos/aos.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/deepblack/assets/plugins/radial-progress/radialprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/deepblack/scss/flag-icon.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/deepblack/scss/style.css') }}">
    <script src="{{ asset('themes/deepblack/js/modernizr.custom.js') }}"></script>

    <style>
        .home-banner {
            height: 90vh;
            background: url(assets/uploads/content/bgr.jpg);
            background-size: cover;
            background-position: center top;
            overflow: hidden;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="application/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="application/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <header id="header-section">
        <style>
            .bg {
                background-color: aliceblue;
            }
        </style>
        <div class="overlay">
            <!-- NAVBAR -->

            <x-layouts.navbar />
        
            <!--/ NAVBAR -->
        </div>
    </header>

    {{ $slot }}

    <x-layouts.footer />

    <!-- scroll top icon -->
    <a href="#" class="scroll-top">
        <img src="{{ asset('themes/deepblack/img/icon/arrow.png') }}" alt="scroll to top" width="30px" height="30px" />
    </a>

    <!-- start preloader -->
    <div id="preloader">
        <img src="{{ asset('uploads/logo/logo.png') }}" alt="preloader" class="loader" width="150px" height="150px" />
    </div>
    <!-- end preloader -->


    <script src="{{ asset('themes/deepblack/assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/plugins/radial-progress/radialprogressOld.html') }}"></script>
    <script src="{{ asset('themes/deepblack/assets/fontawesome/fontawesome.min.js') }}"></script>


    <script src="{{ asset('global/js/notiflix-aio-2.7.0.min.js') }}"></script>
    <script src="{{ asset('global/js/pusher.min.js') }}"></script>
    <script src="{{ asset('global/js/vue.min.js') }}"></script>
    <script src="{{ asset('global/js/axios.min.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('themes/deepblack/js/script.js') }}"></script>

    <script>
        "use strict";
        (function ($) {
            $(document).on('click', '.investNow', function () {
                var planModal = new bootstrap.Modal(document.getElementById('investNowModal'))
                planModal.show()
                let data = $(this).data('resource');
                let price = $(this).data('price');
                let symbol = "$";
                let currency = "USD";
                $('.price-range').text(`Invest: ${price}`);

                if (data.fixed_amount == '0') {
                    $('.invest-amount').val('');
                    $('#amount').attr('readonly', false);
                } else {
                    $('.invest-amount').val(data.fixed_amount);
                    $('#amount').attr('readonly', true);
                }

                $('.profit-details').html(`Interest: ${(data.profit_type == '1') ? `${data.profit} %` : `${data.profit} ${currency}`}`);
                $('.profit-validity').html(`Per ${data.schedule} hours ,  ${(data.is_lifetime == '0') ? `${data.repeatable} times` : `Lifetime`}`);
                $('.plan-name').text(data.name);
                $('.plan-id').val(data.id);
                $('.show-currency').text("USD");
            });

        })(jQuery);

    </script>

</body>


<!-- Mirrored from wealthguros.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 11:22:53 GMT -->

</html>