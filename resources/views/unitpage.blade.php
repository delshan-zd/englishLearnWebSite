

@extends('head')

@section('content')
    <div id="" class="clearfix">

        <!-- Page Title
        ============================================= -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div id="side-navigation" class="tabs custom-js">

                        <div class="col_one_third nobottommargin">

                            <ul class="sidenav">




                                <li class="ui-tabs-active"><a href="#snav-content1"><i class="icon-screen"></i>select a unite
                                    </a></li>

                                @foreach($u as $u1)
                                    <li><a href="{{route('main2',$u1->id)}}">

                                            <img style="width: 50px;"
                                                 src="{{asset('/storage/img/'.$u1->image)}}" >
                                            {{$u1->name}}

                                            <i class="icon-chevron-right"></i></a>

                                    </li>






                                @endforeach


                            </ul>

                        </div>

                        <div class="col_two_third col_last nobottommargin">

                            <div id="snav-content1">
                                <h2>{{$uu->name}}</h2>

                                <p style="margin-top: -20px;">    {{$uu->details}}  </p>                      </div>



                            <div class="" style="margin-top: 20px">

                                <!-- Shop
                                ============================================= -->
                                <div id="shop" class="shop product-1 clearfix">




                                    @foreach($l as $l1)



                                        <div class="product clearfix" style="display: flex">
                                            <div class="" style="width: 40%">
                                                <a href="#"><img  src="{{asset('/storage/img/'.$l1->image)}}"
                                                                  alt="Light Blue Denim Dress"></a>




                                            </div>
                                            <div class="product-desc" style="width: 50%;margin-top: 50px; margin-left: 10px">
                                                <div class="product-title"><h3><a href="#">{{$l1->title}}</a></h3></div>
                                                <div  class="product-price">{{$l1->created_at}}</div>

                                                <ul class="iconlist" >
                                                    <li><i class="icon-caret-right"></i>
                                                        <a href="{{route('details',$l1->id)}}">open lesson</a></li>

                                                    <a href="{{route('grdetail',$l1->id)}}">
                                                    <i class="i-rounded icon-edit" style="background-color:#2ecc71"></i>
                                                    </a>


                                                    <a href="{{route('exdetail',$l1->id)}}">    <i class="i-rounded icon-pen" style="background-color:#40E0D0"></i>
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>




                                <!-- #shop end -->

                            </div><!-- .postcontent end -->



                        </div>

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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

    <script>
        $(function() {
            $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
        });
    </script>

@endsection