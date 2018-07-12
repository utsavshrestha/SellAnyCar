@extends('layouts.app')


@section('content')
    <div class="login-page-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Form content box start-->
                    <div class="form-content-box">
                        <div class="logo-the carhouse  text-center">
                            <a href="#">
                                <img src="{{asset('images/sac.png')}}" alt="logo">

                            </a>
                        </div>
                        <h4>Please login to your account</h4>

                        <form method="post" class="login" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">
                                    Email address*
                                </label>
                                <input type="email" class="input-text{{$errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="username">
                                    Password *
                                </label>
                                <input type="password" class="input-text{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <input type="submit" name="submit" class="btn btn-send btn-block {{ __('Login') }}" value=" Login">

                        </form>
                    </div>
                    <!-- Form content box end-->
                </div>
            </div>
        </div>
    </div>
@endsection
