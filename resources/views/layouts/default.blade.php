<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title') | Frontend
        @show
    </title>
    <!-- global css Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- //global css End -->
    <!-- page level css Start -->
@yield('header_styles')
<!-- //page level css End -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91546845-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>
<!-- Header Section Start -->
<header>
    <nav class="navbar ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
                <li {{ (Request::is('/') ? 'class=active' : '') }}>
                    <a href="{{ route('home') }}"> Home</a>
                </li>
                <li {{ (Request::is('feature') ? 'class=active' : '') }}>
                    <a href="{{ URL::to('feature') }}">Feature</a>
                </li>
                <li {{ (Request::is('portfolio') ? 'class=active' : '') }}>
                    <a href="{{ URL::to('portfolio') }}">Portfolio</a>
                </li>
                <li {{ (Request::is('timeline') || Request::is('timeline/*') ? 'class=active' : '') }}>
                    <a href="{{ URL::to('timeline') }}">Timeline</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- //Header Section Start -->
<!-- Notifications -->
@include('partials.notifications')
<!-- Content -->
@yield('content')

<!-- Footer Section Start -->
<footer>
    <div class="container ftr-txt">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <h3>Hot story to share?</h3>
                <p>
                    We're always on the lookout for good stories, no matter if it's some leaked product info, a new
                    invention, a nice piece of mobile software, a software update for your favorite phone or stuff,
                    regarding the market availability and pricing of any mobile phone.
                </p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <h3>Follow us</h3>
                <p>
                    Stay up to date with the latest mobile phone news, tech, and more. Each week we curate the
                    best new information to keep you in the know.
                </p>
                {{--<form id="subscribe_form" role="form" class="form-horizontal" enctype="multipart/form-data" method="POST">--}}
                    {!! Form::token() !!}
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="E-mail" name="subscribe_email" id="subscribe_email">
                            <span class="input-group-btn">
                                <input id="subscribe_submit" type="submit" class="btn btn-primary" value="Submit">
                            </span>
                    </div><!-- /input-group -->
                {{--</form>--}}
            </div>
            <div class="col-sm-4 col-xs-12">
                <h3>get in touch</h3>
                <p>
                    <i class="fa  fa-map-marker"></i>&nbsp; Cupar, Fife, Scotland KY15 4LF
                </p>
                <p>
                    <i class="fa fa-mobile-phone"></i> Phone:&nbsp;(044) 7463-212193
                </p>
                <p>
                    <i class="fa fa-envelope-o"></i> E-mail:&nbsp;
                    <a href="mailto:"><span class="text-white">sses79@hotmail.com</span></a>
                </p>
                <p>
                    <i class="fa fa-skype"></i> Skype:&nbsp;<span class="text-white">sses79</span>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- //Footer Section End -->
<!-- Copy Right Section Start -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <p>Copyright © 2016</p>
            </div>
            <!-- Icon Section Start -->
            <div class="pad_top10">
                <ul class="list-inline" id="icon_section">
                    <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"> <i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
            <!-- //Icon Section End -->
        </div>
    </div>
</div>
<!-- //Copy Right Section End -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top fa fa-hand-o-up" role="button"
   title="Return to top" data-toggle="tooltip" data-placement="left">
</a>
<!-- global js Start -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/default.js') }}"></script>
<!-- //global js End -->
<!-- page level js Start -->
@yield('footer_scripts')
<!-- new flash script -->
@include('partials/flash')
<!-- //page level js End -->
</body>

</html>
