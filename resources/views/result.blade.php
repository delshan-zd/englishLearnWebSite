<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />





    <link rel="stylesheet" href="{{ asset('c/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css"/>

    <title>result</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="" class="clearfix">

    <section id="content">


        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content

                ============================================= -->
                <div class="fancy-title title-dotted-border title-center">

                    <h3 style="margin-bottom: 40px"> Your result of the <span>test</span> is :</h3>


                    <div class=""  style="margin-bottom: 25px">
                        <div class="rounded-skill nobottommargin"
                             data-color="#3F729B" data-size="200"
                             data-percent="{{$id}}" data-width="3" data-speed="3000">
                            <div class="counter counter-inherit">

                                <span data-from="1" data-to="{{$id}}"
                                      data-refresh-interval="50" data-speed="3000"></span>%</div>
                        </div>
                    </div>



                    @if($id>80)
                        <h3 style="margin-bottom: 40px">Congrts  <span>You pass the exam</span> with hight mark</h3>

                    @elseif($id >60)
                        <h3 style="margin-bottom: 40px">  <span>You pass the exam</span> keep studying ..</h3>

                    @else
                        <h3 style="margin-bottom: 40px">  <span>You faild</span> study well</h3>

                    @endif


                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->

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
<script type="text/javascript" src="{{ asset('c/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('c/js/plugins.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('c/js/functions.js') }}"></script>




</body>
</html>