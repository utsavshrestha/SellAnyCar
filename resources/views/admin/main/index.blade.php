@extends('admin.includes.layouts')
@section('content')
    <div class="content mt-3">

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Users Detail Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>image</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Username</th>
                                        <th>Address</th>
                                        <th>Phonenumber</th>
                                        <th>email</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($data['rows']))
                                        @foreach($data['rows'] as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td><img src="{{asset('images/'.$row->image)}}" width="auto" height="200px"> </td>
                                                <td>{{$row->firstname}}</td>
                                                <td>{{$row->lastname}}</td>
                                                <td>{{$row->username}}</td>
                                                <td>{{$row->address}}</td>
                                                <td>{{$row->phonenumber}}</td>
                                                <td>{{$row->email}}</td>
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




    </div> <!-- .content -->

    @endsection


@section('footer')
    <script src="{{asset('assets/admin-panel/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/admin-panel/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/admin-panel/js/widgets.js')}}"></script>
    <script src="{{asset('assets/admin-panel/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/admin-panel/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/admin-panel/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('assets/admin-panel/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    @endsection
