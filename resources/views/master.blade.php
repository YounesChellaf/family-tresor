<!DOCTYPE html>
<html>
<head>
    <title> الموقع الرسمي لعائلة الهجــاري</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <style>
        nav, body, a,label, h1, h2, h3, h4, h5, h6, p, tr, td, ul, li, span, option,button{
            font-family: DroidArabicKufiRegular, 'sans-serif' !important;
        }
    </style>
    <style>
        .dropbtn {
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(237, 237, 237, 0.2);
            border: 1px solid #eceeec;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            color: #00d2b5;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }


    </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="container d-none d-lg-block">
        <div class="row">
            <div class="col-12 text-center mt-4">
                {{--<h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Landerz<span class="text-primary">.</span> </a></h1>--}}
                <img src="{{asset('assets/images/hejari-logo.png')}}" alt="" width="200" height="150">
            </div>
        </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target mb-5" role="banner" >

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
                    <img src="{{asset('assets/images/hejari-logo.png')}}" alt="" width="110" height="110" style="padding: 12%">
                </div>

                <div class="col-12 col-md-10 main-menu">
                    <nav class="site-navigation position-relative text-right" role="navigation" dir="rtl" >

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <a href="{{route('landing')}}" class="nav-link">الرئيسية</a>
                            <a href="{{route('family_ratios')}}" class="nav-link">نـــســب العائلة</a>
                            {{--<li><a href="{{route('photos')}}" class="nav-link">الصـور</a></li>--}}
                                <div class="dropdown">
                                    <button class="dropbtn">الخدمــــات الالكترونيـة</button>
                                    <div class="dropdown-content">
                                        <a href="{{route('financial_help')}}">طـلب معونة مالية</a>
                                        <a href="{{route('weeding_help')}}">طـلب إعانة زواج</a>
                                        <a href="{{route('reconcile')}}">إصـلاح ذات البين</a>
                                        <a href="{{route('suggestion')}}">الاقـتراحات</a>
                                    </div>
                                </div>
                            <a href="{{route('about_tresor')}}" class="nav-link">عن الصندوق</a>
                            @if(auth()->guest())
                                <a href="{{route('login')}}" class="nav-link">الدخـــــول</a>
                                <a href="{{route('register')}}" class="nav-link">طلـــب العضويـة</a>
                            @else
                                @if(auth()->user()->role == 'admin')
                                    <a href="{{route('dashboard.landing')}}" class="nav-link">لوحــــة التحــكم</a>
                                @else
                                    <a href="{{route('logout')}}" class="nav-link">الخـــروج</a>
                                @endif
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>

    </header>


        @yield('content')

<div class="footer py-5 border-top text-center">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <p class="mb-0">
                    <a   href="{{\App\General::first()->facebook}}" class="p-3"><span class="icon-facebook"></span></a>
                    <a  href="{{\App\General::first()->twitter}}" class="p-3"><span class="icon-twitter"></span></a>
                    <a  href="{{\App\General::first()->instgram}}" class="p-3"><span class="icon-instagram"></span></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0">
                    الموقع الرسمي بإشراف صندوق عائلة الهجــاري
                </p>
            </div>
        </div>
    </div>
</div>




</div> <!-- .site-wrap -->

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>


<script src="{{asset('assets/js/main.js')}}"></script>
@yield('js')
</body>
</html>