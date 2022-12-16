<link rel="stylesheet" href="{{ asset('c/css/bootstrap.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('style.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/dark.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/font-icons.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/animate.css" type="text/css') }}" />
<link rel="stylesheet" href="{{ asset('c/css/magnific-popup.css" type="text/css') }}" />

<link rel="stylesheet" href="{{ asset('c/css/responsive.css" type="text/css') }}" />




<link rel="stylesheet" href="{{ asset('c/css/components/bs-switches.css') }}" type="text/css" />

<!-- Radio Checkbox Plugin -->
<link rel="stylesheet" href="{{ asset('c/css/components/radio-checkbox.css') }}" type="text/css" />


@extends('head')

@section('content')

   <div class="container">


       <div class="fancy-title title-dotted-border title-center" >
           <h1>The <span>{{$v->name}} test : </span> on {{$v->details}}</h1>
<br>
           <img    style="width: 300px"     src="{{asset('/storage/img/a7.jpg')}}" >


       </div>



       <form method="post"
             action="{{ route('tanswer.store')  }}"
             enctype="multipart/form-data" >

           @csrf



           @php
           $i=0;
           @endphp

       @foreach($det1 as $det)


           <div class="fancy-title title-border">
               <h4> <span>the question {{$i}} </span> {{$det->name}}</h4>
           </div>


               <input  type="hidden" name="{{'qu['. $i.']'}}" value="{{$det->id}}">


               @if($det->a1 ==-1)

                   <select class="form-control" name="{{'an['. $i.']'}}"   >
                       <option value="1"> T </option>
                       <option value="2"> F </option>


                   </select>
               @else
           <select class="form-control" name="{{'an['. $i.']'}}"   >
               <option value="1"> {{$det->a1}} </option>
               <option value="2"> {{$det->a2}} </option>
               <option value="3"> {{$det->a3}} </option>
               <option value="4"> {{$det->a4}} </option>

           </select>

               @endif

@php $i++ @endphp

           <div class="line"></div>


       @endforeach

           <input  type="hidden" name="count" value="{{$i}}">
           <input  type="hidden" name="test" value="{{$v->id}}">


           <button type="submit" class="btn btn-primary">send</button>




       </form>




   </div>




@endsection