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
                    <h2 class="title">Questions</h2>

                            <div class="comments-container">
                                @foreach($questions as $singlequestion)
                                <ul class="blog-post-comments">
                                    <li>
                                        <span class="user-name">Asked By: {{$singlequestion->addedby}}</span>
                                        <span class="date"><i class="fa fa-clock-o"></i>Time:{{$singlequestion->created_at}}</span>
                                        <span class="comment">
                                  {{$singlequestion->questiondescription}}
                                </span>
                                    </li>
                                </ul>
                                    @endforeach
                            </div>

                </div>

            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">

                <div class="comments-box">
                    <h2 class="title">All Reply</h2>

                    <div class="comments-container">
                        @foreach($answers as $singleanswer)
                        <ul class="blog-post-comments">
                            <li>
                                <span class="user-name">Answered by: {{$singleanswer->addedby}}</span>
                                <span class="date"><i class="fa fa-clock-o"></i>Time:{{$singleanswer->created_at}}</span>
                                <span class="comment">
                                  {{$singleanswer->answerdescription}}
                                </span>
                            </li>
                        </ul>
                            @endforeach

                    </div>

                </div>

        </div>
    </div>
</div>
@include('layouts.footer')

</body>
</html>
