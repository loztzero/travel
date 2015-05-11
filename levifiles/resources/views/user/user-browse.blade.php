@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">
	<div class="col-md-4">
		<b><big>Menu</big></b>
		<ul class="list-group">
			<li class="list-group-item active">Welcome Nama User</li>
			<li class="list-group-item">Dapibus ac facilisis in</li>
			<li class="list-group-item">Morbi leo risus</li>
			<li class="list-group-item">Porta ac consectetur ac</li>
			<li class="list-group-item">Vestibulum at eros</li>
		</ul>

	</div>

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<h1>Jadwal Tour</h1>
				<h3>Day 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit leo nisl, eget eleifend nibh sollicitudin a. Aliquam sagittis facilisis velit ut pharetra. Fusce mattis odio et porta aliquet. Cras eu augue in tortor lobortis elementum. Nunc fringilla, neque eget rhoncus dapibus, ligula felis placerat sem, a mattis leo justo ac mauris. Nunc accumsan dui quis nisi fringilla scelerisque. Nullam porta ultricies augue sed sollicitudin. Donec eget augue quis lacus cursus tempor vitae at velit. Vestibulum vel odio et magna sodales rutrum. Cras tincidunt vel est sed porta. Proin mattis lectus sit amet tellus interdum, nec mattis augue vehicula. Quisque semper ut ipsum ac posuere. Pellentesque quis scelerisque lorem. Pellentesque pharetra augue porttitor orci dapibus, ac ultrices purus gravida.
				</p>

				<h3>Day 2: Nam vitae dolor a libero sollicitudin tempus.</h3>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit leo nisl, eget eleifend nibh sollicitudin a. Aliquam sagittis facilisis velit ut pharetra. Fusce mattis odio et porta aliquet. Cras eu augue in tortor lobortis elementum. Nunc fringilla, neque eget rhoncus dapibus, ligula felis placerat sem, a mattis leo justo ac mauris. Nunc accumsan dui quis nisi fringilla scelerisque. Nullam porta ultricies augue sed sollicitudin. Donec eget augue quis lacus cursus tempor vitae at velit. Vestibulum vel odio et magna sodales rutrum. Cras tincidunt vel est sed porta. Proin mattis lectus sit amet tellus interdum, nec mattis augue vehicula. Quisque semper ut ipsum ac posuere. Pellentesque quis scelerisque lorem. Pellentesque pharetra augue porttitor orci dapibus, ac ultrices purus gravida.</p>

					<h3>Day 3: Ut posuere metus eget enim scelerisque semper.</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit leo nisl, eget eleifend nibh sollicitudin a. Aliquam sagittis facilisis velit ut pharetra. Fusce mattis odio et porta aliquet. Cras eu augue in tortor lobortis elementum. Nunc fringilla, neque eget rhoncus dapibus, ligula felis placerat sem, a mattis leo justo ac mauris. Nunc accumsan dui quis nisi fringilla scelerisque. Nullam porta ultricies augue sed sollicitudin. Donec eget augue quis lacus cursus tempor vitae at velit. Vestibulum vel odio et magna sodales rutrum. Cras tincidunt vel est sed porta. Proin mattis lectus sit amet tellus interdum, nec mattis augue vehicula. Quisque semper ut ipsum ac posuere. Pellentesque quis scelerisque lorem. Pellentesque pharetra augue porttitor orci dapibus, ac ultrices purus gravida.</p>

						<h3>Day 4: Ut posuere metus eget enim scelerisque semper.</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit leo nisl, eget eleifend nibh sollicitudin a. Aliquam sagittis facilisis velit ut pharetra. Fusce mattis odio et porta aliquet. Cras eu augue in tortor lobortis elementum. Nunc fringilla, neque eget rhoncus dapibus, ligula felis placerat sem, a mattis leo justo ac mauris. Nunc accumsan dui quis nisi fringilla scelerisque. Nullam porta ultricies augue sed sollicitudin. Donec eget augue quis lacus cursus tempor vitae at velit. Vestibulum vel odio et magna sodales rutrum. Cras tincidunt vel est sed porta. Proin mattis lectus sit amet tellus interdum, nec mattis augue vehicula. Quisque semper ut ipsum ac posuere. Pellentesque quis scelerisque lorem. Pellentesque pharetra augue porttitor orci dapibus, ac ultrices purus gravida.
						</p>

						<h3>Day 5: Ut posuere metus eget enim scelerisque semper.</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit leo nisl, eget eleifend nibh sollicitudin a. Aliquam sagittis facilisis velit ut pharetra. Fusce mattis odio et porta aliquet. Cras eu augue in tortor lobortis elementum. Nunc fringilla, neque eget rhoncus dapibus, ligula felis placerat sem, a mattis leo justo ac mauris. Nunc accumsan dui quis nisi fringilla scelerisque. Nullam porta ultricies augue sed sollicitudin. Donec eget augue quis lacus cursus tempor vitae at velit. Vestibulum vel odio et magna sodales rutrum. Cras tincidunt vel est sed porta. Proin mattis lectus sit amet tellus interdum, nec mattis augue vehicula. Quisque semper ut ipsum ac posuere. Pellentesque quis scelerisque lorem. Pellentesque pharetra augue porttitor orci dapibus, ac ultrices purus gravida.
						</p>
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