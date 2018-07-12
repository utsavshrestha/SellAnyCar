<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

@include('layouts.top-header')

<body>

<!-- Top header start -->
<!-- Top header end -->

<!-- Main header start-->
<div class="page-banner">
</div>
<!-- page banner end -->

<!-- About body start-->
<div class="about-body">
    <!-- Page section start-->
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">Welcome to the SellAnyCar.com</h2>
                    <p>Sell Any Car is a project that offers new, safe and convenient way of selling your car throughout Nepal.
                        You can use our free car valuation service regardless of model to determine the best used car as well as new cars price.
                        Take the advantage of the professional and without charge car inspection and the fast car buying service by us
                        sell any car the perfect alternative of time consuming and tiring advertisement.
                        In any situation the project will offer you a fair, fast as well as easy car buying services.</p>

                    <!-- Icon list -->

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{asset('images/Asset 5.png')}}" width="800px" alt="logo">

                </div>
            </div>
        </div>
    </div>
    <!-- Page section end-->

    <!-- Page Section start-->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">Why Choose Us</h2>
                    <p>Everybody loves cars. The passion for cars are increasing day by day.
                        Before there was a lot of problems for the people to sell their car also to buy the cars it was
                        really complicated regarding reliability, fair price also the hassle-free transaction it was nearly
                        impossible to locate the services according to their convenience. Just to sell their car peopl
                        e had to take their time off from the work to meet different people talk about paperwork, money
                        which was risky and also time consuming. So we decided to bring the sell any car project by helping
                        the people to sell their car quickly, conveniently and fairly.
                    </p>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title">More Info</h2>
                    <a href="{{route('user.login')}}" class="btn btn-contact">Want To Know More???</a>

                </div>
            </div>
        </div>
    </section>
</div>
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p>&copy;  2018. Designed by Utsav Shrestha</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
