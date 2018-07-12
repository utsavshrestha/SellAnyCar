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
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-16">
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-heading">
                                <i class="fa fa-car"></i>
                                <h2>recent cars</h2>
                                <div class="border"></div>
                                <h4>Check our all motors</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                           <form method="post" action="{{route('car.search')}}">
                               @csrf
                            <div class="sorting-options">
                                <select  name="option1" class="sorting">

                                    <option>Name</option>
                                    <option>Price</option>
                                </select>
                                <input type="text" name="search" id="search">
                                <input type="submit"  class="btn details-button" value="search">
                            </div>
                           </form>

                        </div>
                    </div>
                </div>

                <!-- List car start-->
                @if(isset($data['rows']))
                    @foreach($data['rows'] as $row)
                <div class="list-car-box">

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-14 list-car-pic clearfix">
                            <img src="{{asset('images/'.$row->carimage)}}" alt="vencer_sarthe_supercar" class="img-responsive">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 car-content clearfix">
                            <div class="header b-items-cars-one-info-header  s-lineDownLeft">
                                <h3>
                                    <a href="">{{$row->carname}}</a>
                                    <span>Rs{{$row->carprice}}</span>
                                </h3>
                            </div>
                            <div class="line-border"></div>

                            <p>{{$row->cardescription}}</p>

                            <div class="item">
                                <div class="col-md-5 col-sm-5 col-xs-12 col-pad">
                                    <p>
                                        <span>Owner</span> {{$row->addedby}}
                                    </p>
                                    <p>
                                        <span>CarType</span>{{$row->cartype}}
                                    </p>
                                    <p>
                                        <span>CarUsedFor</span>{{$row->carusedfor}}
                                    </p>

                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12 col-pad">
                                    <p>
                                        <span>Owner FirstName</span>{{$row->firstname}}
                                    </p>
                                    <p>
                                        <span>Owner Address</span>{{$row->address}}
                                    </p>
                                    <p>
                                        <span>OwnerPhoneNumber</span>{{$row->phonenumber}}
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
                                    <a href="{{route('user.index.detail',[$row->id])}}" class="btn details-button">Details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                    @endforeach
                @endif

            </div>
            {{$data['rows']->links()}}
            <div>
            </div>



            <div class="col-lg-4 col-md-4 col-xs-12">

            <div class="Recent-news">
                <h2 class="title">Recent News</h2>
                @if(isset($data['rows']))
                    @foreach($data['rows'] as $row)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="{{asset('images/'.$row->carimage)}}" width="100px" alt="recent-1">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="">{{$row->carname}}</a>
                        <div class="line-dec-o"></div>
                        <span>Rs{{$row->carprice}}</span>
                    </div>
                    <
                </div>
                    @endforeach
                @endif
            </div>

            </div>

        </div>


    </div>
</div>
@include('layouts.footer')
</body>
</html>
