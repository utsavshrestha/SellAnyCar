@extends('layouts.app')
@section('content')

<div class="login-page-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Form content box start-->
                <div class="form-content-box">
                    <div class="logo-the carhouse">
                        <a href="#">
                            <img src="{{asset('images/sac.png')}}" alt="logo">
                        </a>
                    </div>
                    @include('layouts.flash-message')
                    <h4>REGISTRATION FORM</h4>

                    <form method="post" class="login" action="{{ route('user.register.submit') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <input type="text" class="input-text{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" id="firstname">
                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text{{ $errors->has('lastname') ? ' is-invalid' : '' }}" value="{{ old('lastname') }}" name="lastname" placeholder="Last Name" id="lastname">
                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" name="username" placeholder="Username" id="username">
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text{{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" value="{{ old('phonenumber') }}" name="phonenumber" placeholder="Phone Number" id="phonenumber">
                            @if ($errors->has('phonenumber'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" name="address" placeholder="Address" id="address">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"name="email" placeholder="Email Address" id="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" id="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text" name="password_confirmation" placeholder="Confirm Password" id="Confirmpassword">
                        </div>
                        <div class="form-group">
                            <input type="file"  name="image"  id="image">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <input type="submit" name="submit" class="btn btn-send btn-block" value="Register">

                        <p class="lost-password">
                            Already have an account? <a href="{{route('user.login')}}">click here to login</a>
                        </p>
                    </form>
                </div>
                <!-- Form content box End-->
            </div>
        </div>
    </div>
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

    @endsection
