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
                <td>title</td>
                <td>details</td>
                <td>image</td>
                <td>teacher</td>
                <td>unit</td>



                <td colspan="1">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pro as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->title  }}</td>
                    <td>{{$share->details}}

                    <br>
                        <audio
                               src="{{asset('/storage/'.$share->audio)}}"

                               controls>
                        </audio>
                    </td>
                    <td><img style="width: 180px;"

                             src="{{asset('/storage/img/'.$share->image)}}"

                        ></td>
                    <td>{{$share->name}}</td>
                    <td>{{$share->n1}}</td>




                    <td>
                        <form action="{{ route('lesson.destroy', $share->id)}}"
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
            Add unit
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

            <form method="post"
                  action="{{ route('lesson.store') }}"
                  enctype="multipart/form-data">




                <div class="form-group">
                    @csrf
                    <label for="name"> title</label>
                    <input type="text" class="form-control"
                           name="title"/>
                </div>


                <div class="form-group">
                    <label for="quantity">details</label>
                    <textarea type="text" class="form-control"
                              name="details"></textarea>
                </div>



                <div class="form-group">
                    <label for="quantity">image</label>
                    <input type="file" class="form-control"
                           name="image"  id="image" />

                </div>
                <div class="form-group">
                    <label for="quantity">audio</label>
                    <input type="file" class="form-control"
                           name="audio"  id="audio" />

                </div>



                <select class="form-control"
                        name="unit_id">

                    @foreach($unit as $t)
                        <option value="{{$t->id}}">
                            {{$t->name}}  </option>
                    @endforeach

                </select>





                <button type="submit"
                        class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection