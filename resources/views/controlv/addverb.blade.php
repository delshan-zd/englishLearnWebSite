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
                <td>verb</td>
                <td>past</td>
                <td>pp</td>
                <td>translate</td>
                <td></td>


                <td colspan="3">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pro as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->verb  }}</td>
                    <td>{{$share->past}}</td>
                    <td>{{$share->pp}}</td>
                    <td>{{$share->trans}}</td>



                    <td>
                        <form action="{{ route('verb.destroy', $share->id)}}"
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
                  action="{{ route('verb.store') }}"
                  enctype="multipart/form-data">




                <div class="form-group">
                    @csrf
                    <label for="name"> verb</label>
                    <input type="text" class="form-control"
                           name="verb"/>
                </div>


                <div class="form-group">
                    <label for="quantity">past</label>
                    <input type="text" class="form-control"
                           name="past"/>
                </div>

                <div class="form-group">
                    <label for="quantity">pp</label>
                    <input type="text" class="form-control"
                           name="pp"/>
                </div>

                <div class="form-group">
                    <label for="quantity">translation</label>
                    <input type="text" class="form-control"
                           name="trans"/>
                </div>







                <button type="submit"
                        class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection