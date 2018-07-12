@extends('admin.includes.layouts')

@section('content')
    <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong>Events</strong>
            </div>
            @include('layouts.flash-message')

            <div class="card-body card-block">
                <form action="{{route('admin.events.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="image" class=" form-control-label">Image</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="image" name="image"  class="form-control">@if ($errors->has('image')) <span class="help-block"> <strong>{{ $errors->first('image') }}</strong>
                                    </span> @endif</div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="eventsname" class=" form-control-label">Events</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="eventsname" name="eventsname" placeholder="Enter event name" class="form-control">@if ($errors->has('eventsname')) <span class="help-block"> <strong>{{ $errors->first('eventsname') }}</strong>
                                    </span> @endif

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="eventsdescription" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="eventsdescription" id="eventsdescription" rows="6" placeholder="Description about the event" class="form-control"></textarea>@if ($errors->has('eventsdescription')) <span class="help-block"> <strong>{{ $errors->first('eventsdescription') }}</strong>
                                    </span> @endif</div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="eventslocation" class=" form-control-label">Location</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="eventslocation" name="eventslocation" placeholder="Enter the location for ongoing events" class="form-control"> @if ($errors->has('eventslocation')) <span class="help-block"> <strong>{{ $errors->first('eventslocation') }}</strong>
                                    </span> @endif</div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="eventsdatetime" class=" form-control-label">DateandTime</label></div>
                        <div class="col-12 col-md-9"><input type="datetime-local" id="eventsdatetime" name="eventsdatetime" placeholder="Enter the date and time" class="form-control">@if ($errors->has('eventsdatetime')) <span class="help-block"> <strong>{{ $errors->first('eventsdatetime') }}</strong>
                                    </span> @endif</div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-send btn-block" value="ADD EVENT">

                </form>


            </div>
        </div>
    </div>
    </div>



@endsection
