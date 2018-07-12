@extends('admin.includes.layouts')
@section('content')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"> Car Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Carimage</th>
                                    <th>Carname</th>
                                    <th>Cardescription</th>
                                    <th>Cartype</th>
                                    <th>Carprice</th>
                                    <th>Caruesdfor</th>
                                    <th>Addedby</th>
                                    <th>Createdat</th>
                                    <th>Updatedat</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['rows']))
                                    @foreach($data['rows'] as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td><img src="{{asset('images/'.$row->carimage)}}" width="200" height="auto" </td>
                                            <td>{{$row->carname}}</td>
                                            <td>{{$row->cardescription}}</td>
                                            <td>{{$row->cartype}}</td>
                                            <td>{{$row->carprice}}</td>
                                            <td>{{$row->carusedfor}}</td>
                                            <td>{{$row->addedby}}</td>
                                            <td>{{$row->created_at}}</td>
                                            <td>{{$row->updated_at}}</td>

                                        </tr>


                                    @endforeach

                                @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection

