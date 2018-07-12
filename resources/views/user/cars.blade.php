
<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>

<!-- Top header start -->
<!-- Top header end -->

<!-- Main header start-->
@include('layouts.main-header')
<!-- Main header end-->

<!-- banner start-->
<!-- banner end-->

<!-- Recent car start-->

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
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['rows']))
                                    @foreach($data['rows'] as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td><img src="{{asset('images/'.$row->carimage)}}" width="200px"></td>
                                            <td>{{$row->carname}}</td>
                                            <td>{{$row->cardescription}}</td>
                                            <td>{{$row->cartype}}</td>
                                            <td>{{$row->carprice}}</td>
                                            <td>{{$row->carusedfor}}</td>
                                            <td>{{$row->addedby}}</td>
                                            <td>{{$row->created_at}}</td>
                                            <td>{{$row->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('admin.dashboard')}}"> <i class="fa fa-eye"> </i></a>
                                                <a href="{{ route('user.mycar.edit',[$row->id])}}"> <i class="fa fa-edit"> Edit </i></a>
                                                <a href="{{ route('user.mycar.delete',[$row->id])}}"> <i class="fa fa-trash-o"> </i>Delete</a></td>
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
@include('layouts.footer')

</body>
</html>

