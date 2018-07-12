<!doctype html>
<html>
@include('admin.includes.header')
<body>


<!-- Left Panel -->

@include('admin.includes.left-panel')

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    @yield('content')
</div><!-- /#right-panel -->

<!-- Right Panel -->
@include('admin.includes.footer')


@yield('footer')

</body>
</html>
