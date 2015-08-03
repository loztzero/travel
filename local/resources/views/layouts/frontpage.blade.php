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
      <li><a href="#" style="font-size:15px;">Profile</a></li>
      <li><a href="#">My Travel Time</a></li>
      <li><a href="#">My Trip</a></li>
      <li><a href="#">My Review</a></li>
      <li><a href="#">Message</a></li>
    </ul>

    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        @if(Auth::check())
          <li><a href="#">Profile</a></li>
          <li><a href="#">My Travel Time</a></li>
          <li><a href="#">My Trip</a></li>
          <li><a href="#">My Review</a></li>
          <li><a href="#">Message</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">My Menu<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="{{App::make('url')->to('/user/logout')}}">Logout</a></li>
        @else
          <li><a class="modal-trigger" href="#loginModal" id="loginNav">Login</a></li>
          <li><a href="{{App::make('url')->to('/')}}/main/register">Register</a></li>
        @endif
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="modal-trigger" href="#loginModal">Login</a></li>
        <li><a href="{{App::make('url')->to('/')}}/main/register">Register</a></li>
      </ul>
      
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <br>
  <div class="container" ng-controller="MainCtrl">
    @yield('content')
  </div>

  @include('layouts.user-login-modal')

</body>
<script src="{{App::make('url')->to('/')}}/assets/js/angular.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/angular-sanitize.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/jquery-2.1.4.min.js"></script>
<script src="{{App::make('url')->to('/')}}/assets/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.modal-trigger').leanModal();
  $("#loginNav").click(function() {
    $("#email").focus();
  });


  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );


});
</script>
@yield('script')
</html>
