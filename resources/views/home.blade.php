@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Learn house</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                        @php
                            Auth::user()->type

                        @endphp
                    <br>
                        @if(   Auth::user()->type  ==2)
                            <a style="margin: 10px" class="btn btn-info" href="{{route('unit.index')}}">go to  control panal </a>

                          @else
                            <a style="margin: 10px" class="btn btn-info" href="{{route('profile.index')}}">go to  tests done </a>

                        @endif

                        <a class="btn btn-info" href="{{route('main')}}"> go to main page</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
