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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        @if(Auth::check())
          <li>
            Hii {{ Auth::user()->email }}
          </li>
          <li>
            <a href="{{App::make('url')->to('/user/logout')}}">Logout</a>
          </li>
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

    @if(Auth::user())
    <div class="row">
      <div class="col s3">
        <div class="collection hide-on-med-and-down" >
          <a href="#!" class="collection-item active">Profile</a>
          <a href="#!" class="collection-item">My Travel Time</a>
          <a href="#!" class="collection-item">My Trip</a>
          <a href="#!" class="collection-item">My Review</a>
        </div>
      </div>
      <div class="col s12 m9">
        @yield('content')
      </div>
    </div>
    @else
    @yield('content')
    @endif
    
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
