@extends('layouts.frontangular')
@section('content')

	<div class="row" ng-controller="MainCtrl">		
	@include('user.user-left-nav')
	<div class="col-md-8">

		<form>

		  <div class="form-group">
		    <label for="address1">Alamat 1</label>
		    <input type="text" class="form-control" id="address1" name="address1" placeholder="Alamat 1">
		  </div>

		  <div class="form-group">
		    <label for="address2">Alamat 2</label>
		    <input type="text" class="form-control" id="address2" name="address2" placeholder="Alamat 2">
		  </div>

		  <div class="form-group">
		    <label for="address3">Alamat 3</label>
		    <input type="text" class="form-control" id="address3" name="address3" placeholder="Alamat 3">
		  </div>

		  <div class="form-group">
		    <label for="city">Kota</label>
		    <input type="text" class="form-control" id="city" name="city" placeholder="Kota">
		  </div>

		  <div class="form-group">
		    <label for="country">Negara</label>
		    <input type="text" class="form-control" id="country" name="country" placeholder="Negara">
		  </div>

		  <div class="form-group">
		    <label for="zipCode">Kode Pos</label>
		    <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Kode Pos">
		  </div>

		  <div class="form-group">
		    <label for="description">Deskripsi</label>
		    <input type="text" class="form-control" id="description" name="description" placeholder="Deskripsi">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>

@stop

@section('script')
<script>
var app = angular.module("ui.boardingpassku", ['ngSanitize']);
app.controller("MainCtrl", function ($scope, $http, $filter) {
});
</script>
@stop