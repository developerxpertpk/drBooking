<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dr. Booking</title>
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('css/morris.css') }}">
         <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/jssor.slider-22.2.0.mini.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>

        {{-- flot js include for admin dashboard --}}

          <script src="{{ asset('js/plugins/flot/excanvas.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/plugins/flot/flot-data.js') }}" type="text/javascript"></script>
              <script src="{{ asset('js/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
                <script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
                  <script src="{{ asset('js/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('js/flot/jquery.flot.tooltip.min.js') }}" type="text/javascript"></script>

                    {{-- flot js include for admin dashboard --}}


                        <script src="{{ asset('js/plugins/morris/morris-data.js') }}" type="text/javascript"></script>
                          <script src="{{ asset('js/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
                                <script src="{{ asset('js/morris/raphael.min.js') }}" type="text/javascript"></script>
</head>
<body>
 @include('layouts.admin-header')

  <div id="admin-wrapper">

    <div id="admin-sidebar">
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

                    {{-- <nav class="navbar admin-nav" role="navigation"> --}}
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                              </span>
                            </button>


                 <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="{{ route('home1.home1') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.add') }}"><i class="fa fa-fw fa-bar-chart-o"></i>Add Admin</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                        </li>
                        <li>
                            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                        </li>
                        <li>
                            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                        </li>
                        <li>
                            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
    {{-- </nav> --}}
        </div>
      </div>
    <div id="wrapper">
      <div id="bodder">
    @yield('content')
  </div>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

    </div>

 @include('layouts.footer')
</body>
</html>
