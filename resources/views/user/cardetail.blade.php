<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>

<!-- Top header start -->
<!-- Top header end -->

<!-- Main header start-->
@include('layouts.main-header')
<div class="car-list content-area">
    <div class="container">
        <div class="row">
<div class="list-car-box">

    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 list-car-pic clearfix">

            <img src="{{asset('images/'.$data->carimage)}}" alt="vencer_sarthe_supercar" class="img-responsive">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 car-content clearfix">
            <div class="header b-items-cars-one-info-header  s-lineDownLeft">
                <h3>
                    <a href="">{{$data->carname}}</a>
                    <span>Rs{{$data->carprice}}</span>
                </h3>
            </div>
            <div class="line-border"></div>

            <p>{{$data->cardescription}}</p>

            <div class="item">
                <div class="col-md-5 col-sm-5 col-xs-12 col-pad">
                    <p>
                        <span>Owner</span> {{$data->addedby}}
                    </p>
                    <p>
                        <span>CarType</span>{{$data->cartype}}
                    </p>
                    <p>
                        <span>CarUsedFor</span>{{$data->carusedfor}}
                    </p>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 col-pad">
                    <p>
                        <span>Engine:</span>DOHC 24-valve V-6
                    </p>
                    <p>
                        <span>Color:</span>White
                    </p>
                    <p>
                        <span>Specs</span>2-Passenger
                    </p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 col-pad">
                    <div class="ster-icon">
                        <i class="fa fa-star orange-color"></i>
                        <i class="fa fa-star orange-color"></i>
                        <i class="fa fa-star orange-color"></i>
                        <i class="fa fa-star orange-color"></i>
                        <i class="fa fa-star-o orange-color"></i>
                    </div>
                    <a href="{{route('user.index.buyform',[$data->id])}}" class="btn details-button">Buy</a>
                </div>
            </div>
        </div>

    </div>

</div>
        </div>
    </div>
</div>




@include('layouts.footer')

</body>
</html>
