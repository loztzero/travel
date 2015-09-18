@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">

<form method="post" action="hotel/search">
	<div class="form-group">
		<label class="control-label">Country *</label>
		 <select class="form-control" ng-model="field.country" ng-change="getCity()">
			<option value="">Select Country</option>
			@foreach($countries->Countrys->Country As $value)
		 	<option>{{ucfirst(strtolower($value->CountryName))}}</option>
		 	@endforeach	 	
		 </select>
	</div>

	<div class="form-group">
		<label class="control-label">City</label>
		 <span ng-show="loading">Loading ... </span>
		 <select class="form-control" ng-model="field.city" name="city">
		 	<option value="">Select City</option>
			<option ng-repeat="city in cities" value="@{{city}}">@{{city}}</option>
		 </select>
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<button type="submit" class="btn btn-primary">Search Hotels</button>
</form>
	<?php //print_r($countries->Countrys);?>
	<hr>
	
</div>
@stop

@section('script')
<script>
var app = angular.module("ui.boardingpassku", ['ngSanitize']);
app.controller("MainCtrl", function ($scope, $http, $filter) {

	$scope.cities = {};
	$scope.loading = false;
	// $scope.cities.test = 'zz';
	// console.log($scope.cities);
	$scope.getCity = function(){
		$scope.loading = true;
		$http.get("{{App::make('url')->to('/hotel/cities')}}/" + $scope.field.country).success(function(response) {

			// try {
		 //        JSON.parse(response);
		 //        var value = response.replace(/['"]+/g, '');
		 //        $scope.cities = {value};

		 //    } catch (e) {
		 //        $scope.cities = response;
		 //    }
		 	$scope.cities = response;
		 //    }

			 $scope.cities = response;
			 $scope.field.city = '';
			 $scope.loading = false;

		    console.log(response);

		})
	};

});
</script>
@stop