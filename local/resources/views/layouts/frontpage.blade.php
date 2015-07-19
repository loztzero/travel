<!DOCTYPE html>
<html ng-app="ui.project">
<head>
  <title>Time Travel</title>
  <link media="all" type="text/css" rel="stylesheet" href="{{App::make('url')->to('/')}}/assets/css/materialize.min.css" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
    .icon-block {
      padding: 0 15px;
    }
    .icon-block .material-icons {
      font-size: inherit;
    }
  </style>

</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">sample</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>

    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <br>
  <div class="container" ng-controller="MainCtrl">
    @yield('content')
  </div>

</body>
<script src="{{App::make('url')->to('/')}}/assets/js/angular.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/angular-sanitize.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/jquery-2.1.4.min.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.modal-trigger').leanModal();
});
</script>
@yield('script')
</html>
