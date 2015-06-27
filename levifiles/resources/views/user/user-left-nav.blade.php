<div class="col-md-4">
	<ul class="list-group">
		@if($page == 'user')
		<li class="list-group-item active">Welcome {{Auth::user()->email}}</li>
		@else
		<li class="list-group-item"><a href="{{App::make('url')->to('/user')}}">Welcome {{Auth::user()->email}}</a></li>
		@endif
		
		@if($page == 'detail')
		<li class="list-group-item active">Data Penumpang</li>
		@else
		<li class="list-group-item"><a href="{{App::make('url')->to('/user/passenger-list')}}">Data Penumpang</a></li>
		@endif

		
		<li class="list-group-item"><a href="{{App::make('url')->to('/main/logout')}}">Keluar</a></li>
	</ul>
</div>