<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.user-top-header')

<body>
@include('layouts.main-header')
<!-- Main header end-->
<!-- Blog body start-->
<div class="blog-body">

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">

                <div class="comments-box">
                    <h2 class="title">Discussion Forum</h2>
                    @if(isset($data['rows']))
                        @foreach($data['rows'] as $row)
                    <div class="comments-container">
                        <ul class="blog-post-comments">
                            <li>
                                <span class="user-name">Asked By: {{$row->addedby}}</span>
                                <span class="date"><i class="fa fa-clock-o"></i>Time:{{$row->created_at}}</span>
                                <span class="comment">
                                  {{$row->questiondescription}}
                                </span>
                                <div class="comment-footer">
                                    <a href="{{route('user.answer',[$row->id])}}" class="share-box"><span class="like"><i class="fa fa-heart"></i>Reply</span></a>
                                    <a href="{{route('user.viewreply',[$row->id])}}" class="share-box"><span class="respond"><i class="fa fa-comment"></i>View Reply</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                        @endif
                </div>
                {{$data['rows']->links()}}

            </div>
        </div>
    </div>
</div>
<hr>
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-xs-12">
                <h2 class="title">Ask Your Question</h2>
                @include('layouts.flash-message')
                <div class="contact-form">
                    <form id="contact_form" action="{{route('user.onlineforum.askquestion')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea id="questiondescription" class="input-text" name="questiondescription" placeholder="Enter what you want to ask????"></textarea>
                                @if ($errors->has('questiondescription'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('questiondescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-btnn">
                            <input type="submit" name="sent message" class=" btn btn-message" value="Ask Question">

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













