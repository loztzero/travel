@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	
	@include('user.user-left-nav')

	<div class="col-md-8">
		@include('layouts.message-helper')
		<table class="table table-striped table-condensed table-bordered">
			<tr>
			  <th>Panggilan</th>
			  <th>Nama Depan</th>
			  <th>Nama Belakang</th>
			  <th>No KTP</th>
			  <th>Tanggal Lahir</th>
			  <th>Aksi</th>
			</tr>
			<tr data-ng-repeat="record in passengers">
				<td>@{{record.title}}</td>
	    		<td>@{{record.first_name}}</td>
	            <td>@{{record.last_name}}</td>
	            <td>@{{record.id_number}}</td>
	            <td>@{{record.birth_date}}</td>
	            <td>
	            	<button class="btn btn-primary btn-sm" ng-click="editPassenger(record, $index)">Ubah</button>
	            	<form action="delete-passenger" method="post" class="pull-right">
	            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            	<input type="hidden" value="@{{record.id}}" name="ID">
						<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
					</form>
	            	
	            </td>
	        </tr>
	        </tr>
		</table>

		<hr>

		@{{field}}
		<h3>Input / Ubah Data Penumpang</h3>
		<form action="save-passenger" method="post">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="id" value='@{{field.id}}'>
		  <div class="form-group">
		    <label for="title">Panggilan</label>
		    <select class="form-control" id="title" name="title" ng-model="field.title">
		    	<option value="Mr">Mr</option>
		    	<option value="Mrs">Mrs</option>
		    	<option value="Mrs">Ms</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="firstName">Nama Depan</label>
		    <input type="text" class="form-control" id="firstName" ng-model="field.first_name" name="firstName" placeholder="Nama Depan">
		  </div>

		  <div class="form-group">
		    <label for="middleName">Nama Tengah</label>
		    <input type="text" class="form-control" id="middleName" ng-model="field.middle_name" name="middleName" placeholder="Nama Tengah">
		  </div>

		  <div class="form-group">
		    <label for="lastName">Nama Belakang</label>
		    <input type="text" class="form-control" id="lastName" ng-model="field.last_name" name="lastName" placeholder="Nama Belakang">
		  </div>

		  <div class="form-group">
		    <label for="birthPlace">Tempat Lahir</label>
		    <input type="text" class="form-control" id="birthPlace" ng-model="field.birth_place" name="birthPlace" placeholder="Tempat Lahir">
		  </div>

		  <div class="form-group">
		    <label for="birthDate">Tanggal Lahir</label>
			<p class="input-group">
              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="field.birth_date" is-open="openedBirthDate" datepicker-options="dateOptions" close-text="Close" name="birthDate" readonly />
              <span class="input-group-btn" id="birthDate" name="birthDate">
                <button type="button" class="btn btn-default" ng-click="openBirthDate($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
		  </div>

		  <div class="form-group">
		    <label for="idNumber">No. KTP</label>
		    <input type="text" class="form-control" id="idNumber" name="idNumber" ng-model="field.id_number" placeholder="Nomor KTP">
		  </div>

		  <div class="form-group">
		    <label for="expiredIdDate">Tanggal Kadaluarsa KTP</label>
		    <p class="input-group">
              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="field.expire_id_date" name="expireIdDate" is-open="openedExpiredIdDate" datepicker-options="dateOptions" close-text="Close" readonly />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="openExpiredIdDate($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
		  </div>

		  <div class="form-group">
		    <label for="passportNumber">No. Paspor</label>
		    <input type="text" class="form-control" id="passportNumber" ng-model="field.passport_number" name="passportNumber" placeholder="Nomor Paspor">
		  </div>

		  <div class="form-group">
		    <label for="expiredPasportDate">Tanggal Kadaluarsa Paspor</label>
		    <p class="input-group">
              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="field.expired_passport_date" is-open="openedExpiredPasportDate" datepicker-options="dateOptions" close-text="Close" name="expiredPasportDate" readonly />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="openExpiredPasportDate($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
		  </div>

		  <div class="form-group">
		    <label for="phoneNumber1">No. Telp / Hp 1</label>
		    <input type="text" class="form-control" id="phoneNumber1" ng-model="field.phone_number1" name="phoneNumber1" placeholder="Nomor yang bisa dihubungi">
		  </div>

		   <div class="form-group">
		    <label for="phoneNumber2">No. Telp / Hp 2</label>
		    <input type="text" class="form-control" id="phoneNumber2" ng-model="field.phone_number2" name="phoneNumber2" placeholder="Nomor yang bisa dihubungi">
		  </div>

		  <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>


@stop

@section('script')
<script>
var app = angular.module("ui.boardingpassku", ['ngSanitize', 'ui.bootstrap']);
app.controller("MainCtrl", function ($scope, $http, $filter) {
	$scope.dt = new Date();
	$scope.passengers = <?php echo $passengers ;?>;

	$scope.editPassenger = function(data, index){
		console.log(data);
		$scope.field = angular.copy(data);
		$scope.index = angular.copy(index);
	}


	//for date style popup
  $scope.today = function() {
    $scope.birthDate = new Date();
    $scope.expiredIdDate = new Date();
    $scope.expiredPasportDate = new Date();
  };
  //$scope.today();

  $scope.openBirthDate = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.openedBirthDate = true;
  };

  $scope.openExpiredIdDate = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.openedExpiredIdDate = true;
  };

  $scope.openExpiredPasportDate = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.openedExpiredPasportDate = true;
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