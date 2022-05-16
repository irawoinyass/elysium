<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Elysium') }} | {{$title}}</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="/main/css/bootstrap.min.css" rel="stylesheet">
    <link href="/main/css/fontawesome-all.css" rel="stylesheet">
    <link href="/main/css/owl.css" rel="stylesheet">
    <link href="/main/css/flaticon.css" rel="stylesheet">
    <link href="/main/css/animate.css" rel="stylesheet">
    <link href="/main/css/jquery-ui.css" rel="stylesheet">
    <link href="/main/css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/main/css/nouislider.min.css">
    <link rel="stylesheet" href="/main/css/nouislider.pips.css">
    <link href="/main/css/hover.css" rel="stylesheet">
    <link href="/main/css/custom-animate.css" rel="stylesheet">
    <link href="/main/css/style.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="/main/css/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="/main/css/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="/main/css/colors/color-default.css">

    <link rel="shortcut icon" href="/main/images/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="/main/images/favicon.png" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">


@include('MainInc.staticheader')
  @yield('content')
@include('MainInc.staticfooter')


    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



    <script src="/main/js/jquery.js"></script>
    <script src="/main/js/popper.min.js"></script>
    <script src="/main/js/bootstrap.min.js"></script>
    <script src="/main/js/TweenMax.js"></script>
    <script src="/main/js/jquery-ui.js"></script>
    <script src="/main/js/jquery.fancybox.js"></script>
    <script src="/main/js/owl.js"></script>
    <script src="/main/js/mixitup.js"></script>
    <script src="/main/js/knob.js"></script>
    <script src="/main/js/appear.js"></script>
    <script src="/main/js/wow.js"></script>
    <script src="/main/js/jQuery.style.switcher.min.js"></script>
    <script type="text/javascript" src="/main/cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
    </script>
    <script src="/main/js/jquery.easing.min.js"></script>
    <script src="/main/js/wNumb.min.js"></script>
    <script src="/main/js/nouislider.min.js"></script>
    <script src="/main/js/custom-script.js"></script>


    <script src="/main/js/lang.js"></script>
    <script src="/main/translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
    <script src="/main/js/color-switcher.js"></script>

</body>



</html>