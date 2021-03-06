@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-4 col-md-offset-4 col-sm-12">

		<div class="panel panel-primary">
			<div class="panel-heading material-teal-900">
				<h3 class="panel-title ">Sign In</h3>
			</div>
			<div class="panel-body">

				@if (Session::has('error'))
	            <div class="alert alert-danger" role="alert">
	              {{ Session::get('error') }}
	            </div>
	            @endif

				<form action="check" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary pull-right">Log In</button>
				</form>

			</div>
		</div>

	</div>
</div>
@stop

@section('script')
<script>
var app = angular.module("ui.boardingpassku", ['ngSanitize']);
app.controller("MainCtrl", function ($scope, $http, $filter) {
});
</script>
@stop