@extends('admin.includes.layouts')
@section('content')
    @if(isset($data['rows']))
        @foreach($data['rows'] as $row)
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <h5 class="text-sm-center mt-2 mb-1"><i class="fa fa-user"></i> {{$row->addedby}}</h5>
                            <div class="location text-sm-center"><i class="fa fa-comment-o"></i> {{$row->feedbacks}}</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                            <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach
        @endif
@endsection
