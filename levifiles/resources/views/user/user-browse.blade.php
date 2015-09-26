@extends('layouts.frontangular')
@section('content')


	<div class="row" ng-controller="MainCtrl">		
	@include('user.user-left-nav')
	<div class="col-md-8">
		
		@include('layouts.message-helper')

		<form action="user/save-detail-user" method="post">
			@if(isset($userDetail))
			<input type="hidden" name="id" value="{{$userDetail->id}}">
			@endif
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">

		  <div class="form-group">
		    <label for="address1">Alamat 1</label>
		    <input type="text" class="form-control" id="address1" name="address1" placeholder="Alamat 1" value="{{ isset($userDetail) ? $userDetail->address1 : null }}">
		  </div>

		  <div class="form-group">
		    <label for="address2">Alamat 2</label>
		    <input type="text" class="form-control" id="address2" name="address2" placeholder="Alamat 2" value="{{ isset($userDetail) ? $userDetail->address2 : null }}">
		  </div>

		  <div class="form-group">
		    <label for="address3">Alamat 3</label>
		    <input type="text" class="form-control" id="address3" name="address3" placeholder="Alamat 3" value="{{ isset($userDetail) ? $userDetail->address3 : null }}">
		  </div>

		  <div class="form-group">
		    <label for="city">Kota</label>
		    <input type="text" class="form-control" id="city" name="city" placeholder="Kota" value="{{ isset($userDetail) ? $userDetail->city : null }}">
		  </div>

		  <div class="form-group">
		    <label for="country">Negara</label>
		    <input type="text" class="form-control" id="country" name="country" placeholder="Negara" value="{{ isset($userDetail) ? $userDetail->country : null }}">
		  </div>

		  <div class="form-group">
		    <label for="zipCode">Kode Pos</label>
		    <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Kode Pos" value="{{ isset($userDetail) ? $userDetail->zip_code : null }}">
		  </div>

		  <div class="form-group">
		    <label for="description">Deskripsi</label>
		    <input type="text" class="form-control" id="description" name="description" placeholder="Deskripsi" value="{{ isset($userDetail) ? $userDetail->description : null }}">
		  </div>

		  <button type="submit" class="btn btn-primary">Save My Profile</button>
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