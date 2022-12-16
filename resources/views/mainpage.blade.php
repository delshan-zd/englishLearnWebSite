<link rel="stylesheet" href="c/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="c/css/dark.css" type="text/css" />
<link rel="stylesheet" href="c/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="c/css/animate.css" type="text/css" />
<link rel="stylesheet" href="c/css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="c/css/responsive.css" type="text/css" />

@extends('head')

@section('content')

    <div id="" class="clearfix">

        <!-- Header
        ============================================= -->


        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">


                    <div class="fslider" data-pagi="false" data-animation="fade">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><img src="images/about/4.jpg" alt="About Image"></a></div>
                                <div class="slide"><a href="#"><img src="images/about/5.jpg" alt="About Image"></a></div>
                                <div class="slide"><a href="#"><img src="images/about/6.jpg" alt="About Image"></a></div>
                                <div class="slide"><a href="#"><img src="images/about/7.jpg" alt="About Image"></a></div>
                            </div>
                        </div>
                    </div>


                    <div class="col_one_fourth center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-users"></i>
                        <div class="counter counter-large" style="color: #3498db;"><span data-from="100"
                                                                                         data-to="250" data-refresh-interval="50" data-speed="2000"></span></div>
                        <h5>Students learned</h5>
                    </div>

                    <div class="col_one_fourth center" data-animate="bounceIn" data-delay="200">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-book"></i>
                        <div class="counter counter-large" style="color: #e74c3c;"><span data-from="100"
                                                                                         data-to="23" data-refresh-interval="50" data-speed="2500"></span></div>
                        <h5>Lessons</h5>
                    </div>

                    <div class="col_one_fourth center" data-animate="bounceIn" data-delay="400">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-briefcase"></i>
                        <div class="counter counter-large" style="color: #16a085;"><span data-from="100"
                                                                                         data-to="22" data-refresh-interval="50" data-speed="3500"></span></div>
                        <h5>Teachers</h5>
                    </div>

                    <div class="col_one_fourth center col_last" data-animate="bounceIn" data-delay="600">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-cup"></i>
                        <div class="counter counter-large" style="color: #9b59b6;"><span data-from="100"
                                                                                         data-to="210" data-refresh-interval="30" data-speed="2700"></span></div>
                        <h5>Test questions</h5>
                    </div>

                    <div class="clear"></div>





                    <div id="section-home" class="heading-block title-center nobottomborder page-section">
                        <h1>Welcome to our website for learning English</h1>
                        <span>You can rich the information <span class="color">Easy</span> &amp; Interactive</span>
                    </div>

                    <div class="center bottommargin">

                        <a href="{{route('register')}}" data-scrollto="#section-pricing" class="button button-3d button-red button-xlarge nobottommargin">
                            <i class="icon-user2"></i>start as a teacher or a student</a>

                        <br>
                        <a href="{{route('login')}}" class="button button-3d button-teal button-xlarge nobottommargin"><i class="icon-user4"></i>
                            login</a>

                    </div>

                    <div class="clear"></div>




                    <div class="clear"></div>

                    <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>









                </div>


            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->


    <!-- Footer Scripts
    ============================================= -->

    <script type="text/javascript" src="c/js/jquery.js"></script>
    <script type="text/javascript" src="c/js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="c/js/functions.js"></script>

    <script type="text/javascript">

        jQuery('#google-map').gMap({

            address: 'Melbourne, Australia',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: "Melbourne, Australia",
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                    icon: {
                        image: "images/icons/map-icon-red.png",
                        iconsize: [32, 39],
                        iconanchor: [32,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });
    </script>
@endsection