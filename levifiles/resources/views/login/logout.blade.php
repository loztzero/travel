@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-4">
		<h1>Anda Telah Logout</h1>
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