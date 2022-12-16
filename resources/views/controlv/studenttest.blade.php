<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />


    <h1>users Test :</h1>

    <table class="table table-hover tickets-list table-actions-bar dt-responsive "
           cellspacing="0" width="100%" id="datatable">
        <thead>
        <tr>
            <td>test name </td>
            <td>test details </td>


        </tr>
        </thead>
        <tbody>
        @foreach($s as $share)
            <tr>

                <td>{{$share->name  }}</td>

                <td>{{$share->details}}</td>



            </tr>
        @endforeach
        </tbody>
    </table>



