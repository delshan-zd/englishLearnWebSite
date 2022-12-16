<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic|Play+Fair:700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="c/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="c/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="c/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="c/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="c/css/magnific-popup.css" type="text/css" />

    <!-- Bootstrap Data Table Plugin -->
    <link rel="stylesheet" href="c/css/components/bs-datatable.css" type="text/css" />

    <link rel="stylesheet" href="c/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <!-- Document Title
    ============================================= -->
    <title>Data Tables | Canvas</title>

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


    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Unregular Verbs list</h1>

        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="table-responsive">

                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Verb</th>
                            <th>Past</th>
                            <th>P P</th>
                            <th>translate</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Verb1</th>
                            <th>Past1</th>
                            <th>P P1</th>
                            <th>translate1</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($v as $v1)
                        <tr>
                            <td>{{$v1->verb}}</td>
                            <td>{{$v1->past}}</td>
                            <td>{{$v1->pp}}</td>
                            <td>{{$v1->trans}}</td>

                        </tr>
@endforeach

                        </tbody>
                    </table>


           <img    style="width: 300px"     src="{{asset('/storage/img/a6.jpg')}}" >


                </div>

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
<script type="text/javascript" src="c/js/jquery.js"></script>
<script type="text/javascript" src="c/js/plugins.js"></script>

<!-- Bootstrap Data Table Plugin -->
<script type="text/javascript" src="c/js/components/bs-datatable.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

<script>

    $(document).ready(function() {
        $('#datatable1').dataTable();
    });

</script>

</body>
</html>