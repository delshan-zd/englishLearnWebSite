<link rel="stylesheet" href="c/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="c/css/dark.css" type="text/css" />
<link rel="stylesheet" href="c/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="c/css/animate.css" type="text/css" />
<link rel="stylesheet" href="c/css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="c/css/responsive.css" type="text/css" />

@extends('head')

@section('content')

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Grammer Refferencd</h1>

        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">




                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                           <strong>Grammers</strong>
                        </a>


                        @foreach($v as $v1)
                            <a href="{{route('gdetail',$v1->id)}}" class="list-group-item">{{$v1->name}}</a>

                        @endforeach

                    </div>

                    <div class="line"></div>




                </div><!-- .postcontent end -->



            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->

@endsection