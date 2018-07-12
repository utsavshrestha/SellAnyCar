<div class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-logo" href="{{route('user.index')}}">
                    <img src="{{asset('images/sac.png')}}" alt="logo">

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="{{route('user.index.home')}}" {!! request()->is('user/index')?'class="active"':''!!}>Home</a></li>
                    <li><a href="{{route('user.events')}}" {!! request()->is('user/events')?'class="active"':''!!}>Events</a></li>
                    <li><a href="{{route('user.onlineforum')}}"{!! request()->is('user/onlineforum')?'class="active"':''!!}>Online Forum</a></li>
                    <li><a href="{{route('user.feedback')}}" {!! request()->is('user/feedback')?'class="active"':''!!}>Feedback</a></li>
                    <li><a href="{{route('user.accountsetting')}}"{!! request()->is('user/accountsetting')?'class="active"':''!!}>Account Setting</a></li>
                    <li ><a href="{{route('user.add.car')}}" {!! request()->is('user/addcar')?'class="active"':''!!}>Sell Your Car </a></li>
                    <li><a href="contact.html">Help</a></li>
                    <li><a href="{{route('user.mycars')}}"{!! request()->is('user/user/mycars')?'class="active"':''!!}>My Cars</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
