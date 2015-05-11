@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-4 col-md-offset-4">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Login</h3>
			</div>
			<div class="panel-body">

				<form>
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Alamat Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="sandi" placeholder="Sandi">
					</div>
					<button type="submit" class="btn btn-primary pull-right">Login</button>
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