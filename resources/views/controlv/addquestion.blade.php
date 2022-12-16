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
                <td>lesson_id</td>


                <td colspan="1">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pro as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->a1  }}</td>
                    <td>{{$share->a2  }}</td>
                    <td>{{$share->a3  }}</td>
                    <td>{{$share->a4  }}</td>
                    <td>{{$share->details}}</td>
                    <td>{{$share->correct}}</td>
                    <td>{{$share->lesson_id}}</td>




                    <td>
                        <form action="{{ route('question.destroy', $share->id)}}"
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
            Add question
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
                  action="{{ route('question.store') }}"
                  enctype="multipart/form-data">




                <div class="form-group">
                    @csrf
                    <label for="name"> name</label>
                    <input type="text" class="form-control"
                           name="name"/>
                </div>


                <div class="form-group">
                    <label for="quantity">selection 1</label>
                    <input type="text" class="form-control"
                           name="a1"/>
                </div>

    <div class="form-group">
                    <label for="quantity">selection 2</label>
                    <input type="text" class="form-control"
                           name="a2"/>
                </div>
 <div class="form-group">
                    <label for="quantity">selection 3</label>
                    <input type="text" class="form-control"
                           name="a3"/>
                </div>
 <div class="form-group">
                    <label for="quantity">selection 4</label>
                    <input type="text" class="form-control"
                           name="a4"/>
                </div>


                <label for="quantity">Lesson name</label>

                <select class="form-control"
                        name="lesson_id">

                    @foreach($unit as $t)
                        <option value="{{$t->id}}">
                            {{$t->title}}  </option>
                    @endforeach

                </select>
                <label for="quantity">The correct Answer</label>

                <select class="form-control"
                        name="correct">

                        <option value="1">1  </option>
                        <option value="2">2  </option>
                        <option value="3">3  </option>
                        <option value="4">4  </option>

                </select>

                <input type="hidden" name="type" value="1">


                <button type="submit"
                        class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection