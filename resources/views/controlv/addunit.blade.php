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
                <td>details</td>
                <td></td>


                <td colspan="3">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pro as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->name  }}</td>
                    <td>{{$share->details}}</td>
                    <td><img style="width: 50px;" src="{{asset('/storage/img/'.$share->image)}}"></td>



                    <td>
                        <form action="{{ route('unit.destroy', $share->id)}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>


<td>

    <a class="btn btn-info"  href="{{route('unit.show',$share->id)}}">detail</a>

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
                  action="{{ route('unit.store') }}"
                  enctype="multipart/form-data">




                <div class="form-group">
                    @csrf
                    <label for="name"> name</label>
                    <input type="text" class="form-control"
                           name="name"/>
                </div>


                <div class="form-group">
                    <label for="quantity">details</label>
                    <input type="text" class="form-control"
                           name="details"/>
                </div>


                <div class="form-group">
                    <label for="quantity">image</label>
                    <input type="file" class="form-control"
                           name="image"  id="image" />

                </div>






                <button type="submit"
                        class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection