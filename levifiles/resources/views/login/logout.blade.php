@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-4">

		<div class="panel panel-default">
			<div class="panel-body">

				<form>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Pulang Pergi
						</label>

						&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Pulang Pergi
						</label>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Asal</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tujuan</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="col-md-6" style="padding:0px 10px 15px 0px;">
							<label for="exampleInputFile">Berangkat</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>

						<div class="col-md-6" style="padding:0px 0px 15px 10px;">
							<label for="exampleInputFile">Berangkat</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4" style="padding:0px 5px 15px 0px;">
							<label for="exampleInputFile">Berangkat</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>

						<div class="col-md-4" style="padding:0px 0px 15px 5px;">
							<label for="exampleInputFile">Berangkat</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>

						<div class="col-md-4" style="padding:0px 0px 15px 10px;">
							<label for="exampleInputFile">Berangkat</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>

					<button type="submit" class="btn btn-primary pull-right">Cari</button>
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