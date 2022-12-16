<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

@extends('controlv.layout')

@section('content')



    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif




            <h2> You have in the site :</h2>

            <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                   cellspacing="0" width="100%" id="datatable">
                <thead>
                <tr>
                    <td>students </td>
                    <td>teachers</td>
                    <td>test</td>

                    <td>unit</td>
                    <td>lessons</td>
                    <td>grammer</td>





                </tr>
                </thead>
                <tbody>
                    <tr>

                        @php
                            $t0 = count($u1);
                            $t = count($u2);
                        @endphp

<td>{{$t0  }}</td>
<td>{{$t  }}</td>
                        <td>{{$t1  }}</td>
                        <td>{{$t2  }}</td>
                        <td>{{$t3  }}</td>
                        <td>{{$t4  }}</td>




                    </tr>
                </tbody>
            </table>



            <h1>new users this month</h1>



            <table class="table  tickets-list table-actions-bar dt-responsive ">
            <thead>
            <tr>
                <td>students </td>
                <td></td>
                <td> teachers</td>


            </tr>
            </thead>

        <tbody>
        <tr>

            <td>
                <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                       cellspacing="0" width="100%" id="datatable">
                    <thead>
                    <tr>
                        <td>name </td>
                        <td>created_at</td>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pro1 as $share)
                        <tr>
                            <td>{{$share->name  }}</td>

                            <td>{{$share->created_at}}</td>



                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </td>
            <td> </td>
            <td>

                <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                       cellspacing="0" width="100%" id="datatable">
                    <thead>
                    <tr>
                        <td>name </td>
                        <td>created_at</td>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pro2 as $share)
                        <tr>
                            <td>{{$share->name  }}</td>

                            <td>{{$share->created_at}}</td>



                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </td>
        </tr>
        </tbody>

        </table>

<hr>


            <h1>new users this year</h1>


            <table class="table  tickets-list table-actions-bar dt-responsive ">
                <thead>
                <tr>
                    <td>students </td>
                    <td></td>
                    <td> teachers</td>


                </tr>
                </thead>

                <tbody>
                <tr>

                    <td>
                        <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                               cellspacing="0" width="100%" id="datatable">
                            <thead>
                            <tr>
                                <td>name </td>
                                <td>created_at</td>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pro3 as $share)
                                <tr>
                                    <td>{{$share->name  }}</td>

                                    <td>{{$share->created_at}}</td>



                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </td>
                    <td> </td>
                    <td>

                        <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                               cellspacing="0" width="100%" id="datatable">
                            <thead>
                            <tr>
                                <td>name </td>
                                <td>created_at</td>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pro4 as $share)
                                <tr>
                                    <td>{{$share->name  }}</td>

                                    <td>{{$share->created_at}}</td>



                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </td>
                </tr>
                </tbody>

            </table>

            <hr>



        <h1> Test questions :</h1>

            <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                   cellspacing="0" width="100%" id="datatable">
                <thead>
                <tr>
                    <td>id </td>
                    <td>name </td>
                    <td>question count in this test </td>


                </tr>
                </thead>
                <tbody>
                @foreach($pro5 as $share)
                    <tr>
                        <td>{{$share->id  }}</td>
                        <td>{{$share->name  }}</td>

                        <td>{{$share->CO}}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>



        <h1> unit lessons :</h1>

            <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                   cellspacing="0" width="100%" id="datatable">
                <thead>
                <tr>
                    <td>id </td>
                    <td>name </td>
                    <td>lesson count in this unit </td>


                </tr>
                </thead>
                <tbody>
                @foreach($pro6 as $share)
                    <tr>
                        <td></td>
                        <td>{{$share->name  }}</td>

                        <td>{{$share->CO}}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>



            <h1>users Test :</h1>

            <table class="table table-hover tickets-list table-actions-bar dt-responsive "
                   cellspacing="0" width="100%" id="datatable">
                <thead>
                <tr>
                    <td>test name </td>
                    <td>test details </td>
                    <td>user name </td>


                </tr>
                </thead>
                <tbody>
                @foreach($pro7 as $share)
                    <tr>

                        <td>{{$share->name  }}</td>

                        <td>{{$share->details}}</td>
                        <td>{{$share->name1  }}</td>



                    </tr>
                @endforeach
                </tbody>
            </table>


    </div>






@endsection