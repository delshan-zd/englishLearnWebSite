<script type="text/javascript" src="{{ asset('c/js/jquery.js') }}"></script>


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
        <table class="table table-striped">
            <thead>
            <tr>
                <td>id </td>
                <td>name</td>
                <td>a1</td>
                <td>a2</td>
                <td>a3</td>
                <td>a4</td>
                <td>correct</td>
                <td>test_id</td>


                <td colspan="1">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pro as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->name  }}</td>
                    <td>  @if($share->a1 ==-1  )<p> </p> @else {{$share->a1  }} @endif </td>
                    <td>  @if($share->a2 ==-1  )<p> </p> @else {{$share->a1  }} @endif </td>
                    <td>  @if($share->a3 ==-1  )<p> </p> @else {{$share->a1  }} @endif </td>
                    <td>  @if($share->a4 ==-1  )<p> </p> @else {{$share->a1  }} @endif </td>
                    <td>{{$share->correct}}</td>
                    <td>{{$share->test_id}}</td>




                    <td>
                        <form action="{{ route('tquestion.destroy', $share->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>








    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add test question
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif


                <div class="form-group">
                    <label for="quantity">the question type :</label>

                    <button id="tf" class="btn btn-info">True False</button>
                    <button id="four" class="btn btn-info">4 Choses</button>

                </div>

                <script>
                    $(document).ready(function () {

                        $('#a1').hide();
                        $('#a2').hide();
                        $('#a3').hide();
                        $('#a4').hide();


                        $('#tf').click(function () {
                            $('#a1').hide();
                            $('#a2').hide();
                            $('#a3').hide();
                            $('#a4').hide();


                            $('#b11').text("T");
                            $('#b22').text("F");
                            $('#b33').hide();
                            $('#b44').hide();

                            $('#a11').val(-1);
                            $('#a22').val(-1);
                            $('#a33').val(-1);
                            $('#a44').val(-1);


                            $('#an').val(2);


                        });
                        $('#four').click(function() {

                            $('#an').val(4);


                            $('#a1').show();
                            $('#a2').show();
                            $('#a3').show();
                            $('#a4').show();



                            $('#a11').val('');
                            $('#a22').val('');
                            $('#a33').val('');
                            $('#a44').val('');




                            $('#b11').text("1");
                            $('#b22').text("2");
                            $('#b33').show();
                            $('#b44').show();


                        });
                    });
                </script>



            <form method="post"
                  action="{{ route('tquestion.store') }}"
                  enctype="multipart/form-data">




                <div class="form-group">
                    @csrf
                    <label for="name"> name</label>
                    <input type="text" class="form-control"
                           name="name"/>
                </div>







                <div class="form-group" id="a1">
                    <label for="quantity" >selection 1</label>
                    <input type="text" class="form-control"
                           name="a1" id="a11"/>
                </div>

                <div class="form-group" id="a2">
                    <label for="quantity" >selection 2</label>
                    <input type="text" class="form-control"
                           name="a2" id="a22"/>
                </div>
                <div class="form-group" id="a3">
                    <label for="quantity">selection 3</label>
                    <input type="text" class="form-control"
                           name="a3" id="a33"/>
                </div>
                <div class="form-group" id="a4">
                    <label for="quantity">selection 4</label>
                    <input type="text" class="form-control"
                           name="a4" id="a44"/>
                </div>



<input type="hidden"
       value="{{$test->id}}"
       name="test_id">


                <input type="hidden"
                       value="2"
                       id="an"
                       name="an">


                <select class="form-control"
                        name="correct">

                    <option id="b11" value="1" > 1  </option>
                    <option id="b22" value="2">2  </option>
                    <option id="b33" value="3">3  </option>
                    <option id="b44" value="4">4  </option>

                </select>

                <input type="hidden" name="type" value="1">


                <button type="submit"
                        class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection