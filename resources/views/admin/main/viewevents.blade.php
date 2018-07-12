@extends('admin.includes.layouts')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"> Events data table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Image</th>
                                    <th>EventName</th>
                                    <th>EventDescription</th>
                                    <th>EventLocation</th>
                                    <th>EventDateTime</th>
                                    <th>UpdatedAt</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['rows']))
                                    @foreach($data['rows'] as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td><img src="{{asset('images/'.$row->image)}}" width="200" height="auto"> </td>
                                            <td>{{$row->eventsname}}</td>
                                            <td>{{$row->eventsdescription}}</td>
                                            <td>{{$row->eventslocation}}</td>
                                            <td>{{$row->eventsdatetime}}</td>
                                            <td>{{$row->created_at}}</td>
                                            <td>
                                                <a href="{{ route('admin.events.delete',[$row->id])}}"> <i class="menu-icon fa fa-trash-o"> </i></a>
                                            </td>
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
