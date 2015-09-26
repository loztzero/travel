@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">


	<div class="col-md-4">

		<ul class="nav nav-tabs well-material-teal-900" style="margin-bottom: 15px;">
		    <li class="active"><a href="#home" data-toggle="tab">Hotel</a></li>
		    <li><a href="#pesawat" data-toggle="tab">Pesawat</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">

		    <div class="tab-pane fade active in" id="home">
		         @include('home.home-browse-hotel')
		    </div>

		    <div class="tab-pane fade" id="pesawat">
		        @include('home.home-browse-plane')
		    </div>

		</div>

	</div>

	<div class="col-sm-12 col-md-8">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner shadow-z-1" role="listbox" style="border:2px solid white;">
		    <div class="item active">
		      <img src="{{App::make('url')->to('/assets/img')}}/gambar.jpg" alt="...">
		      <div class="carousel-caption">
		        Promotion 1
		      </div>
		    </div>
		    <div class="item">
		       <img src="{{App::make('url')->to('/assets/img')}}/gambar2.jpg" alt="...">
		      <div class="carousel-caption">
		        Promotion 1
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

</div>
@stop

@section('script')
<script>

$(function () {
    $('#datetimepicker1').datetimepicker({
    	format: 'DD-MM-YYYY'
    });

    $('#datetimepicker2').datetimepicker({
    	format: 'DD-MM-YYYY'
    });
});

var app = angular.module("ui.boardingpassku", ['ngSanitize']);
app.controller("MainCtrl", function ($scope, $http, $filter) {

	$scope.field = {};
	$scope.field.country = 'Indonesia';
});
</script>
@stop