<link rel="stylesheet" href="{{ asset('c/css/bootstrap.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('style.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/dark.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/font-icons.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/animate.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/magnific-popup.css" type="text/css') }}" />

<link rel="stylesheet" href="{{ asset('c/css/responsive.css" type="text/css') }}" />



@extends('head')

@section('content')

<div style=" margin-top: 20px"></div>


<div class="container clearfix">

    @foreach($v1 as $v)

        <div class="promo promo-border bottommargin">
            <h3>The test <span>  {{$v->name }}</span> in  <span>{{$v->details}}</span></h3>
            <span>it was created at {{$v->created_at}}</span>
            <a href="{{route('tdetail',$v->id)}}" class="button button-xlarge button-rounded">Start Now</a>
        </div>



    @endforeach

</div>


@endsection