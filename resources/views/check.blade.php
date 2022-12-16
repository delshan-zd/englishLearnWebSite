<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />


@extends('head')

@section('content')


    <style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="uper container">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif


    <h2 style="color:#1ABC9C;">correcting Your test : </h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <td>id </td>
            <td>name</td>
            <td>correct</td>
            <td>your answer</td>
            <td></td>


        </tr>
        </thead>
        <tbody>

        @php
        $i=0;
        $all =count($pro);
        @endphp

        @foreach($pro as $s)

            <tr>
                <td></td>

                <td>{{$s->name}}</td>

                @if($s->a1==-1)
                    <td>
                        @if($s->q == 1)True
                        @else False

                        @endif
                    </td>

                    <td>
                        @if($s->an ==1)True
                        @else Flase

                        @endif
                    </td>

                    @else
                <td>
                    @if($s->q ==1){{$s->a1  }}
                @elseif($s->q ==2){{$s->a2  }}
                @elseif($s->q ==3){{$s->a3  }}
                @else{{$s->a4  }}
@endif
                </td>

                <td>
                    @if($s->an ==1){{$s->a1  }}
                    @elseif($s->an ==2){{$s->a2  }}
                    @elseif($s->an ==3){{$s->a3  }}
                    @else{{$s->a4  }}
                    @endif
                </td>

                @endif

                <td > @if($s->an == $s->q)
                        <img style="width: 50px;" src="{{asset('/storage/img/tr1.png')}}">
                         @php
                         $i++;
                         @endphp

                    @else
                        <img style="width: 50px;" src="{{asset('/storage/img/tr2.png')}}">
                    @endif
                </td>





            </tr>
        @endforeach
        </tbody>
    </table>

        @php
            $z = ($i / $all)*100;
        @endphp


    <h3> Your have <strong style="color:#1ABC9C ">{{$i}}</strong> correct from <strong>{{$all}}</strong>
    <a class="btn btn-info" href="{{route('tanswer.edit',$z)}}">show result</a>



    </h3>







</div>



@endsection
