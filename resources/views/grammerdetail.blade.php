<link rel="stylesheet" href="{{ asset('c/css/bootstrap.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('style.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/dark.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/font-icons.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/animate.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/magnific-popup.css" type="text/css') }}" />

<link rel="stylesheet" href="{{ asset('c/css/responsive.css" type="text/css') }}" />

@extends('head')

@section('content')

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">



                    <h4>Grammer Example and casses</h4>

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading" style="background-color: #1ABC9C; color: white;font-size: 20px">{{$v->name}}</div>
                        <div class="panel-body">

                            {!! nl2br(e($v->use)) !!}

                        </div>

                        <!-- Table -->
                        <table class="table">
                            <thead>
                            <tr style="background-color: #29dcb0">
                                <th>#</th>
                                <th>name</th>
                                <th>form</th>
                                <th>example</th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach($det as $d)

                              <tr>
                                  <td></td>
                                  <td style="color: #188a6f ;border-right: solid rgba(1,1,1,0.09) 2px ;  ">{{$d->name}}</td>
                                  <td style="border-right: solid rgba(1,1,1,0.09) 2px ;"><strong >{{$d->form}}</strong></td>
                                  <td>{{$d->ex}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="line"></div>




                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">



                        <img style="width: 100%;margin-top: 40px"
                             %
                             src="{{asset('/storage/img/a5.jpg')}}" >


                    </div>
                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->

@endsection