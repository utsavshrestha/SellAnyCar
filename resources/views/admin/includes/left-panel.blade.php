<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('images/logos.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li {!! request()->is('admin/dashboard')?'class="active"':''!!}>
                    <a href="{{ route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                 <li {!! request()->is('admin/cars')?'class="active"':''!!}>
                    <a href="{{route('admin.car')}}"> <i class="menu-icon fa fa-table"></i> view cars </a>
                </li>

                </li>
                  <li {!! request()->is('admin/events')?'class="active"':''!!}>
                    <a href="{{route('admin.events')}}"> <i class="menu-icon fa fa-calendar"></i>Events</a>
                </li>
                <li {!! request()->is('admin/events/view')?'class="active"':''!!}>
                    <a href="{{route('admin.events.view')}}"> <i class="menu-icon fa fa-calendar"></i>View Events</a>
                </li>
                <li {!! request()->is('admin/feedbacks')?'class="active"':''!!}>
                    <a href="{{route('admin.feedbacks')}}"> <i class="menu-icon fa fa-comments-o"></i> Feedbacks </a>
                </li>

                <li {!! request()->is('admin/logout')?'class="active"':''!!}>
                    <a href="{{route('admin.logout')}}"> <i class="menu-icon fa fa-power-off"></i>Logout</a>
                </li>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
