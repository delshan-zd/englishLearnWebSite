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
                <td>form</td>
                <td>ex</td>
                <td>grammer</td>


                <td colspan="1">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pro as $share)
                <tr>
                    <td>{{$share->id}}</td>

                    <td>{{$share->name}}</td>
                    <td>{{$share->form  }}</td>
                    <td>{{$share->ex}}</td>
                    <td>{{$share->title}}</td>




                    <td>
                        <form action="{{ route('grammer.destroy', $share->id)}}"
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
            Add grammer
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
                  action="{{ route('grammer.store') }}"
                  enctype="multipart/form-data">




                <div class="form-group">
                    @csrf
                    <label for="name"> name</label>
                    <input type="text" class="form-control"
                           name="name"/>
                </div>


                <div class="form-group">
                    <label for="quantity">form</label>
                    <input type="text" class="form-control"
                           name="form"/>
                </div>

    <div class="form-group">
                    <label for="quantity">example</label>
                    <input type="text" class="form-control"
                           name="ex"/>
                </div>







                <select class="form-control"
                        name="grammer_id">

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