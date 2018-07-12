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
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <img src="{{asset('images/sac.png')}}" alt="logo">

                    <h2>SellAnyCar</h2>
                    <div class="line-dec"></div>
                    <h5>Sell your car from sellanycar cheaper, faster and reliable</h5>
                    <p>
                        <a href="{{route('user.index')}}" class="home-btn">Home</a>
                        <a href="{{route('user.feedback')}}" class="active-page">FeedBack</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Contact us body start-->
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                @include('layouts.flash-message')
                <h2 class="title">What do you think about out website feel free to give some feedbacks</h2>
                <div class="contact-form">
                    <form id="contact_form" action="{{route('user.feedback.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea id="message" class="input-text" name="feedbacks" placeholder="We will be glad to hear your feedbacks"></textarea>
                                    @if ($errors->has('feedbacks'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('feedbacks') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-btnn">
                                <input type="submit" name="sent message" class=" btn btn-message" value="send feedbacks">
                            </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-xs-12">
                <!-- contact details start-->
                <div class="contact-details">

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>Phone</h5>
                            <p><span>office:</span> 01-4362498</p>
                            <p><span>Mobile:</span> 9849329276</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>Email</h5>
                            <p>
                                <span>office:</span><a href="mailto:info@themevessel.com"> info@sellanycar.com</a>
                            </p>

                            <p>
                                <span>Mobile:</span><a href="tel:+880-825-585-5656">9849329276</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- contact details end-->

                <!-- share start-->
                <!-- share end-->
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
