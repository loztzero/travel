<!DOCTYPE html>
<html ng-app="ui.boardingpassku">
<head>
  <title>Boardingpassku</title>
  <link media="all" type="text/css" rel="stylesheet" href="{{App::make('url')->to('/')}}/assets/css/bootstrap.css">

  <link media="all" type="text/css" rel="stylesheet" href="{{ App::make('url')->to('/') }}/assets/css/bootstrap-theme.css">

   <link href="{{ App::make('url')->to('/') }}/assets/css/roboto.min.css" rel="stylesheet">
  <link href="{{ App::make('url')->to('/') }}/assets/css/material-fullpalette.min.css" rel="stylesheet">
  <link href="{{ App::make('url')->to('/') }}/assets/css/ripples.min.css" rel="stylesheet">

  <link media="all" type="text/css" rel="stylesheet" href="{{ App::make('url')->to('/') }}/assets/css/sticky-footer-navbar.css">

  <link media="all" type="text/css" rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/build/css/bootstrap-datetimepicker.css">
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link href="{{ App::make('url')->to('/') }}/assets/css/summernote.css" rel="stylesheet">
<link href="{{ App::make('url')->to('/') }}/assets/css/summernote-bs3.css" rel="stylesheet">

</head>
<body>

  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">BoardingPassKu</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{App::make('url')->to('/main')}}">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </a>  
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if ( Auth::check() )
          <li>
            <a href="{{App::make('url')->to('/user')}}">{{ Auth::user()->email }}
            </a>
          </li>
          @else
          <li><a href="{{App::make('url')->to('/main/')}}/login">Login</a></li>
          <li><a href="{{App::make('url')->to('/main/')}}/register">Register</a></li>
          @endif
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div><!-- /.container -->

</body>
<script src="{{App::make('url')->to('/')}}/assets/js/angular-latest.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/angular-sanitize.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.2.15/angular-locale_id-id.js"></script> -->
<script src="{{App::make('url')->to('/')}}/assets/js/jquery.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/bootstrap.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/ui-bootstrap-tpls-0.13.0.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/ripples.min.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/material.min.js"></script>
@yield('script')
</html>
