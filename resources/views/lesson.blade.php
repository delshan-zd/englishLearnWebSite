<link rel="stylesheet" href="c/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="c/css/dark.css" type="text/css" />
<link rel="stylesheet" href="c/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="c/css/animate.css" type="text/css" />
<link rel="stylesheet" href="c/css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="c/css/responsive.css" type="text/css" />


@extends('head')

@section('content')
    <!-- Document Wrapper
============================================= -->
    <div id="" class="container">




        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <div class="single-post nobottommargin">

                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix" style="margin-left: 20px">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2>    {{$l->title}} </h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i>  {{$l->created_at}}  </li>
                                    <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                    <li><i class="icon-folder-open"></i> <a href="#">unit</a> <a href="#">{{$l->unit_id}}</a></li>
                                    <li><a href="#"><i class="icon-volume"></i></a></li>
                                </ul><!-- .entry-meta end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin">

                                    <!-- Entry Image
                                    ============================================= -->
                                    <div class="entry-image " style="margin-top: 20px">
                                        <audio
                                                src="{{asset('/storage/'.$l->audio)}}"
                                                class="a"
                                                controls >
                                            <p>your browser doesn't support audio files</p>
                                        </audio> </div>


                                    <img           src="{{asset('/storage/img/'.$l->image)}}"
                                    >

                                </div><!-- .entry-image end -->



<p style="margin: 20px; font-size: 20px">
    {!! nl2br(e($l->details)) !!}

</p>


                                <div class="clear"></div>


                            </div>
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->



                        <!-- Post Author Info
                        ============================================= -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Posted by <span><a href="#">{{$u->name}}</a></span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="author-image">
                                    <img   src="{{asset('/storage/img/us.png')}}" alt="" class="img-circle">
                                </div>

this is a teacher in our big comunity <br> and he has a reate experine of teaching
                            </div>
                        </div><!-- Post Single - Author End -->






                    </div>

                </div><!-- .postcontent end -->






            </div>


        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->

    </div><!-- #wrapper end -->


    <!-- Disqus Comments end -->

@endsection
