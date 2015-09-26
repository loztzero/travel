<div class="col-md-4 visible-md visible-lg">

	<ul class="basic-list-group">
		@if($page == 'user')
		<li class="well-material-teal-900 white">Profile</li>
		@else
		<li><a href="{{App::make('url')->to('/user')}}">Profile</a></li>
		@endif
		
		@if($page == 'detail')
		<li class="well-material-teal-900 white">Data Passengers</li>
		@else
		<li><a href="{{App::make('url')->to('/user/passenger-list')}}">Data Passengers</a></li>
		@endif

		{{--@if($page == 'password')
		<li class="well-material-teal-900 white">Change Password</li>
		@else
		<li><a href="{{App::make('url')->to('/user/change-password')}}">Change Password</a></li>
		@endif

		@if($page == 'order')
		<li class="well-material-teal-900 white">My Order</li>
		@else
		<li><a href="{{App::make('url')->to('/user/order-history')}}">My Order</a></li>
		@endif --}}

		<li><a href="{{App::make('url')->to('/main/logout')}}">Logout</a></li>
	</ul>
	<div style="clear:both;"></div>
</div>