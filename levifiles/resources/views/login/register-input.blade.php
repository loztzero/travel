@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-8">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Pendaftaran</h3>
			</div>
			<div class="panel-body">

				<form class="form-horizontal">
					<div class="form-group">
						<label for="firstName" class="col-sm-2 control-label">Nama Depan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="firstName" placeholder="Nama Depan">
						</div>
					</div>
					<div class="form-group">
						<label for="lastName" class="col-sm-2 control-label">Nama Belakang</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="lastName" placeholder="Nama Belakang">
						</div>
					</div>
					<div class="form-group">
						<label for="alamatEmail" class="col-sm-2 control-label">Alamat Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="alamatEmail" placeholder="Alamat Email">
						</div>
					</div>
					<div class="form-group">
						<label for="sandi" class="col-sm-2 control-label">Sandi</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="sandi" placeholder="Sandi">
						</div>
					</div>
					<div class="form-group">
						<label for="konfirmasiSandi" class="col-sm-2 control-label">Konfirmasi Sandi</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="konfirmasiSandi" placeholder="Sandi">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Daftar</button>
						</div>
					</div>
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