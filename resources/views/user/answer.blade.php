<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>
@include('layouts.main-header')
<!-- Main header end-->
<!-- Blog body start-->
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="comments-container">
                <ul class="blog-post-comments">
                    <li>
                        <span class="user-name">Asked By: {{$data->addedby}}</span>
                        <span class="date"><i class="fa fa-clock-o"></i>Time:{{$data->created_at}}</span>
                        <span class="comment">
                                  {{$data->questiondescription}}
                                </span>

                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-10 col-xs-12">
                <h2 class="title">Give Your Answer</h2>
                @include('layouts.flash-message')
                <div class="contact-form">
                    <form id="contact_form" action="{{route('user.onlineforum.reply')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <?php $qid=$data->id ?>
                        <input type="hidden" name="qid" value="<?php echo $qid ?>">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea id="questiondescription" class="input-text" name="answerdescription" placeholder="Give your answers!!!!!!!!!!!!!"></textarea>
                                @if ($errors->has('answerdescription'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('answerdescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-btnn">
                            <input type="submit" name="sent message" class=" btn btn-message" value="Give Answers">

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
@include('layouts.footer')

</body>
</html>
