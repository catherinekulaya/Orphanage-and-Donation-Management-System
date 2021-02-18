<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ORPHANAGE') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>

    <div id="app">
      <nav class="mnb navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <i class="ic fa fa-bars"></i>
            </button>
            <div style="padding: 15px 0;">
               <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
            </div>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">En</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Draude Oba <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Settings</a></li>
                  <li><a href="#">Upgrade</a></li>
                  <li><a href="#">Help</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-bell-o"></i></a></li>
              <li><a href="#"><i class="fa fa-comment-o"></i></a></li>
            </ul>
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>
          </div>
        </div>
      </nav>
      <!--msb: main sidebar-->
      <div class="msb" id="msb">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <div class="brand-wrapper">
                <!-- Brand -->
                <div class="brand-name-wrapper">
                  <a class="navbar-brand" href="#">
                    SAITAMA
                  </a>
                </div>
      
              </div>
      
            </div>
      
            <!-- Main Menu -->
            <div class="side-menu-container">
              <ul class="nav navbar-nav">
      
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><a href="#"><i class="fa fa-puzzle-piece"></i> Components</a></li>
                <li><a href="#"><i class="fa fa-heart"></i> Extras</a></li>
      
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                  <a data-toggle="collapse" href="#dropdown-lvl1">
                    <i class="fa fa-diamond"></i> Apps
                    <span class="caret"></span>
                  </a>
                  <!-- Dropdown level 1 -->
                  <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="nav navbar-nav">
                        <li><a href="#">Mail</a></li>
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">Ecommerce</a></li>
                        <li><a href="#">User</a></li>
                        <li><a href="#">Social</a></li>
      
                        <!-- Dropdown level 2 -->
                        <li class="panel panel-default" id="dropdown">
                          <a data-toggle="collapse" href="#dropdown-lvl2">
                            <i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
                          </a>
                          <div id="dropdown-lvl2" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul class="nav navbar-nav">
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
      (function(){
      $('#msbo').on('click', function(){
      $('body').toggleClass('msb-x');
       });
      }());
    </script>

</body>
</html>
