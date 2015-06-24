@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	
	@include('user.user-left-nav')

	<div class="col-md-8">
		<form>
		  <div class="form-group">
		    <label for="title">Panggilan</label>
		    <select class="form-control" id="title" name="title">
		    	<option value="Mr">Mr</option>
		    	<option value="Mrs">Mrs</option>
		    	<option value="Mrs">Ms</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="firstName">Nama Depan</label>
		    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nama Depan">
		  </div>

		  <div class="form-group">
		    <label for="middleName">Nama Tengah</label>
		    <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Nama Tengah">
		  </div>

		  <div class="form-group">
		    <label for="lastName">Nama Belakang</label>
		    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nama Belakang">
		  </div>

		  <div class="form-group">
		    <label for="birthPlace">Tempat Lahir</label>
		    <input type="text" class="form-control" id="birthPlace" name="birthPlace" placeholder="Tempat Lahir">
		  </div>

		  <div class="form-group">
		    <label for="birthDate">Tanggal Lahir</label>
			<p class="input-group">
              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="dt" is-open="opened" datepicker-options="dateOptions" close-text="Close" readonly />
              <span class="input-group-btn" id="birthDate" name="birthDate">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
		  </div>

		  <div class="form-group">
		    <label for="idNumber">No. KTP</label>
		    <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="Nomor KTP">
		  </div>

		  <div class="form-group">
		    <label for="expiredIdDate">Tanggal Kadaluarsa KTP</label>
		    <p class="input-group">
              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="dt" is-open="opened" datepicker-options="dateOptions" close-text="Close" readonly />
              <span class="input-group-btn" id="expiredIdDate" name="expiredIdDate">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
		  </div>

		  <div class="form-group">
		    <label for="passportNumber">No. Paspor</label>
		    <input type="text" class="form-control" id="passportNumber" name="passportNumber" placeholder="Nomor Paspor">
		  </div>

		  <div class="form-group">
		    <label for="expiredPasportDate">Tanggal Kadaluarsa Paspor</label>
		    <p class="input-group">
              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="dt" is-open="opened" datepicker-options="dateOptions" close-text="Close" readonly />
              <span class="input-group-btn" id="expiredPasportDate" name="expiredPasportDate">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
		  </div>

		  <div class="form-group">
		    <label for="phoneNumber1">No. Telp / Hp 1</label>
		    <input type="text" class="form-control" id="phoneNumber1" name="phoneNumber1" placeholder="Nomor yang bisa dihubungi">
		  </div>

		   <div class="form-group">
		    <label for="phoneNumber2">No. Telp / Hp 2</label>
		    <input type="text" class="form-control" id="phoneNumber2" name="phoneNumber2" placeholder="Nomor yang bisa dihubungi">
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
@stop

@section('script')
<script>
var app = angular.module("ui.boardingpassku", ['ngSanitize', 'ui.bootstrap']);
app.controller("MainCtrl", function ($scope, $http, $filter) {
	$scope.dt = new Date();

		$scope.today = function() {
    $scope.dt = new Date();
  };
  $scope.today();

  $scope.clear = function () {
    $scope.dt = null;
  };

  $scope.open = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.opened = true;
  };

  $scope.dateOptions = {
    formatYear: 'yy',
    startingDay: 1
  };

  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[0];


});
</script>
@stop