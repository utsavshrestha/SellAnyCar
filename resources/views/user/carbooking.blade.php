<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>

<!-- Top header start -->
<!-- Top header end -->

<!-- Main header start-->
@include('layouts.main-header')

<div class="login-page-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Form content box start-->
                <div class="form-content-box">
                    @include('layouts.flash-message')
                    <h4>Purchase Cars</h4>

                    <form method="post" class="login" action="{{ route('user.index.buycar',[$data->id]) }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label>FirstName</label>
                            <input type="text" class="input-text" name="firstname"  id="firstname">
                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>LastName</label>
                            <input type="text" class="input-text" name="lastname" id="lastname">
                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>PhoneNumber</label>
                            <input type="text" class="input-text" name="phonenumber"  id="phonenumber">
                            @if ($errors->has('phonenumber'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="input-text" name="email"  id="email" value="{{$data->addedby}}" readonly>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="input-text" name="address" value="" id="address">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>CarName</label>
                            <input type="text" class="input-text" name="carname" value="{{$data->carname}}" id="carname" readonly>
                            @if ($errors->has('carname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Car Description</label>
                            <textarea class="form-control" rows="6" name="cardescription" readonly  >{{$data->cardescription}}</textarea>
                            @if ($errors->has('cardescription'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cardescription') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Car price (Rs)</label>
                            <input type="text" class="input-text" name="carprice" value="{{$data->carprice}}" id="carprice" readonly>
                            @if ($errors->has('carprice'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carprice') }}</strong>
                                </span>
                            @endif
                        </div>

                        <input type="submit" name="submit" class="btn btn-send btn-block" value="Purchase">

                    </form>
                </div>
                <!-- Form content box End-->
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')

</body>
</html>
