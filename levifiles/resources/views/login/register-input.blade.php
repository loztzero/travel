@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-8">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Pendaftaran</h3>
			</div>
			<div class="panel-body">
				@if (count($errors) > 0)
				<div class="alert alert-danger" role="alert">
					@foreach ($errors as $key)
						{!! $key !!} <br>
					@endforeach
				</div>
				@endif

				<form class="form-horizontal" method="post" action="../main/save">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Sandi</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="password" name="password" placeholder="Sandi">
						</div>
					</div>
					<div class="form-group">
						<label for="repassword" class="col-sm-3 control-label">Konfirmasi Sandi</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="repassword" name="repassword" placeholder="Konfirmasi Sandi">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
							<button type="submit" class="btn btn-primary">Daftar</button>
						</div>
					</div>
				</form>

				{{-- action="validate-register" --}}
				<!-- <form class="form-horizontal" method="post" action="../user/save">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="firstName" class="col-sm-2 control-label">Nama Depan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nama Depan">
						</div>
					</div>
					<div class="form-group">
						<label for="lastName" class="col-sm-2 control-label">Nama Belakang</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nama Belakang">
						</div>
					</div>
					<div class="form-group">
						<label for="alamatEmail" class="col-sm-2 control-label">Alamat Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="alamatEmail" name="email" placeholder="Alamat Email">
						</div>
					</div>
					<div class="form-group">
						<label for="sandi" class="col-sm-2 control-label">Sandi</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="sandi" name="password" placeholder="Sandi">
						</div>
					</div>
					<div class="form-group">
						<label for="konfirmasiSandi" class="col-sm-2 control-label">Konfirmasi Sandi</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="konfirmasiSandi" name="rePassword" placeholder="Sandi">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Daftar</button>
						</div>
					</div>
				</form>

				<button id="zz">Press</button> -->
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

$("#zz").click(function(){
    $.post("validate-register", 
    	{
          _token: "{{ csrf_token() }}",
          city: "Duckburg"
        }
    	,function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});
</script>
@stop