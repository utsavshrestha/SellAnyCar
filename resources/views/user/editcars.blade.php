
<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>
<!-- Main header start-->
@include('layouts.main-header')

<div class="login-page-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Form content box start-->
                <div class="form-content-box">
                    <h4>SELL YOUR CAR</h4>
                    @include('layouts.flash-message')
                    <form method="post" class="login" action="{{ route('user.mycar.update',$data->id) }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label>Car image</label>
                            <input type="file" name="carimage" id="carimage" >
                            <img class="img-responsive" src="{{asset('images/'.$data->carimage)}}" width="100px">
                            @if ($errors->has('carimage'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carimage') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Car name</label>
                            <input type="text" class="input-text" name="carname"  id="carname" value={{$data->carname}}>
                            @if ($errors->has('carname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Car Description</label>
                            <textarea class="form-control" rows="6" name="cardescription" >{{$data->cardescription}}</textarea>
                            @if ($errors->has('cartype'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cardescription') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label>Car type</label>
                            <input type="text" class="input-text" name="cartype" value={{$data->cartype}} id="cartype">
                            @if ($errors->has('cartype'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cartype') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Car price (Rs)</label>
                            <input type="text" class="input-text" name="carprice" value={{$data->carprice}} id="carprice">
                            @if ($errors->has('carprice'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carprice') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Car used for</label>
                            <input type="text" class="input-text" name="carusedfor" value={{$data->carusedfor}} id="carusedfor">
                            @if ($errors->has('carusedfor'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carusedfor') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <input type="submit" name="submit" class="btn btn-send btn-block" value="Update">

                    </form>
                </div>
                <!-- Form content box End-->
            </div>
        </div>
    </div>
</div>

<!-- Main header end-->
@include('layouts.footer')

</body>
</html>
