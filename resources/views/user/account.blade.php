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
                    <h4> Update Your Account</h4>

                    <form method="post" class="login" action="{{ route('user.accountsetting.update') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file"  name="image"  id="image"><img src="{{asset('images/'.$data->image)}}">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>FirstName</label>
                            <input type="text" class="input-text{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ $data->firstname }}" placeholder="First Name" id="firstname">
                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>LastName</label>
                            <input type="text" class="input-text{{ $errors->has('lastname') ? ' is-invalid' : '' }}" value="{{ $data->lastname }}" name="lastname" placeholder="Last Name" id="lastname">
                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="input-text{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{$data->username }}" name="username" placeholder="Username" id="username">
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>PhoneNumber</label>
                            <input type="text" class="input-text{{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" value="{{$data->phonenumber }}" name="phonenumber" placeholder="Phone Number" id="phonenumber">
                            @if ($errors->has('phonenumber'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <label>Address</label>
                        <div class="form-group">
                            <input type="text" class="input-text{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ $data->address }}" name="address" placeholder="Address" id="address">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $data->email }}"name="email" placeholder="Email Address" id="email" readonly>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" class="input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" value=""name="password" placeholder="password" id="password" >
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <input type="submit" name="submit" class="btn btn-send btn-block" value="Update Account">

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
