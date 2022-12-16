<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('c/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('c/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('c/css/font-icons.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('c/css/responsive.css') }}" type="text/css" />


    <link rel="stylesheet" href="{{ asset('c/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('c/css/magnific-popup.css') }}" type="text/css" />


    <!-- Document Title
    ============================================= -->
    <title>Learn</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">

        <div id="header-wrap">

            <div class=" clearfix">


                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"> <div style="display: flex"><img src="{{ asset('images/logo1.png')}}" alt="Canvas Logo"> <h2 style="margin: auto auto">Learn <br> house</h2></div> </a>
                    <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('images/logo@2x.png')}}" alt="Canvas Logo"></a>

                </div><!-- #logo end -->

                <nav id="primary-menu">

                    <ul>
                        <li><a href="{{route('home1')}}"><div>Home</div></a>
                        </li>
                        <li><a href="{{route('main')}}"><div>unit</div></a>
                        </li>
                        <li class="mega-menu"><a href="{{route('grammers')}}"><div>grammer</div></a>
                        </li>
                        <li class="mega-menu"><a href="{{route('tests')}}"><div>test</div></a>
                        </li>
   <li class="mega-menu"><a href="{{route('verbs')}}"><div>urregular verbs</div></a>
                        </li>

                        <li><a href="{{route('about')}}"><div>about</div></a>
                        </li>
                    </ul>

                    <!-- Top Cart
                    ============================================= -->


                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->




@yield('content')


<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class=" col_two_third  ">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <h5 class="nobottommargin">allcopyright@informaticsEngineering - Aleppo University</h5>
                            </div>

                            <div class="col-md-6 ">
                                <h5 class="nobottommargin">By : Delshan Zada</h5>
                            </div>

                        </div>

                    </div>


                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{ asset('c/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('c/js/plugins.js') }}"></script>




<!-- Footer Scripts
============================================= -->




</body>
</html>