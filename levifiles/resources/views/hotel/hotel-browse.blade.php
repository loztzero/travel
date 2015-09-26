@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">

<form method="post" action="hotel/search">

	<br><br><br>

	<div class='col-sm-6'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

    <div class='col-sm-6'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker2'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    

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
<script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
            	format: 'DD-MM-YYYY'
            });

            $('#datetimepicker2').datetimepicker({
            	format: 'DD-MM-YYYY'
            });
        });
    </script>

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


	$scope.today = function() {
		$scope.dt = new Date();
	};
	$scope.today();

	$scope.clear = function () {
		$scope.dt = null;
	};

	// Disable weekend selection
	$scope.disabled = function(date, mode) {
		return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
	};

	$scope.toggleMin = function() {
		$scope.minDate = $scope.minDate ? null : new Date();
	};
	$scope.toggleMin();
	$scope.maxDate = new Date(2020, 5, 22);

	$scope.open = function($event) {
		console.log("pressed");
		$scope.status.opened = true;
	};

	$scope.dateOptions = {
		formatYear: 'yy',
		startingDay: 1
	};

	$scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
	$scope.format = $scope.formats[0];

	$scope.status = {
		opened: false
	};

	  var tomorrow = new Date();
  tomorrow.setDate(tomorrow.getDate() + 1);
  var afterTomorrow = new Date();
  afterTomorrow.setDate(tomorrow.getDate() + 2);
  $scope.events =
    [
      {
        date: tomorrow,
        status: 'full'
      },
      {
        date: afterTomorrow,
        status: 'partially'
      }
    ];

  $scope.getDayClass = function(date, mode) {
    if (mode === 'day') {
      var dayToCheck = new Date(date).setHours(0,0,0,0);

      for (var i=0;i<$scope.events.length;i++){
        var currentDay = new Date($scope.events[i].date).setHours(0,0,0,0);

        if (dayToCheck === currentDay) {
          return $scope.events[i].status;
        }
      }
    }

    return '';
  };

});
</script>
@stop