<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>
@include('layouts.main-header')
<!-- Main header end-->
<div class="blog-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-xs-12">
                <!-- Blog box start-->
                @if(isset($data['rows']))
                    @foreach($data['rows'] as $row)
                <div class="thumbnail blog-box clearfix">
                    <img src="{{asset('images/'.$row->image)}}"  alt="blog-01">
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Title -->
                        <h1 class="title">
                            <a href="">{{$row->eventsname}}</a>
                        </h1>
                        <!-- Post Materials-->
                        <div class="post-materials">
                            <div class="header">
                                BY <a href="#">SellAnyCar Organizer</a> <i class="fa fa-clock-o"></i>{{$row->eventsdatetime}}<i class="fa fa-bars"></i> <a>{{$row->eventslocation}}</a>, <a>Journey</a>, <a>{{$row->eventsname}}</a>
                            </div>
                            <!-- paragraph -->
                            <p>{{$row->eventsdescription}}</p>
                            <!-- Btn -->
                            <a href="#" class="btn btn-read-more">Read More</a>
                        </div>
                    </div>
                    <hr />
                </div>
                    @endforeach
                @endif
            </div>
            {{$data['rows']->links()}}
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
