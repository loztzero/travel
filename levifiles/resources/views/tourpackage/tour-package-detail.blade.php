@extends('layouts.frontpage')
@section('content')
<div class="row">
	<div class="col-md-5 col-sm-12">
		<img src="{{App::make('url')->to('/')}}/uploads/flower.jpg" class="img-responsive img-thumbnail">
	</div>
	<div class="col-md-7 col-sm-12">
		<span style="font-size:16px;">From : <b style="color:red;">100 USD</b> / pax</span>
		<br><br>

		<h3>Mau Liburan dengan paket ini ?<br>
			Informasikan ke kami dan kami akan menghubungi anda.</h3>
		<form>
			<div class="form-group col-sm-12" >
				<label for="nama">Nama</label>
				<input type="text" class="form-control" placeholder="Nama">
			</div>
			<div class="form-group col-sm-12" >
				<label for="email">Email</label>
				<input type="email" class="form-control" placeholder="Nama">
			</div>
			<div class="form-group col-sm-12" >
				<label for="phone">Hp / Telp.</label>
				<input type="text" class="form-control" placeholder="Nomor yang dapat dihubungi">
			</div>
			<div class="form-group col-md-4 col-sm-6">
				<label for="dewasa">Dewasa</label>
				<select name="dewasa" class="form-control">
					@for ($i = 1; $i < 10; $i++)
					<option value="{{ $i }}">{{ $i }}</option>
					@endfor
				</select>
			</div>
			<div class="form-group col-md-4 col-sm-6" >
				<label for="anak">Anak</label>
				<select name="dewasa" class="form-control">
					@for ($i = 0; $i < 10; $i++)
					<option value="{{ $i }}">{{ $i }}</option>
					@endfor
				</select>
			</div>
			<div class="form-group col-md-4 col-sm-6" >
				<label for="tanggal">Tanggal</label>
				<div class='input-group date datepicker' id="tanggal"  >
					<input type='text' class="form-control" data-date-format="DD/MM/YYYY" readonly="readonly" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>

			<div class="form-group col-sm-12" >
				<label for="informasi">Keterangan</label>
				<textarea class="form-control" placeholder="Dapat diisi pertanyaan, permintaan, info dan hal-hal yang mau disampaikan."></textarea>
			</div>

			<div class="form-group col-sm-12" >
				<button type="submit" class="form-control btn btn-primary">Submit</button>
			</div>

		</form>

	</div>

	<div style="clear:both;"></div>
	<br><br>
	<div class="row">
		<div class="col-md-12">
			<div role="tabpanel">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Deskripsi</a></li>
				</ul>	

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">

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
									<p>

										<h3>Day 5: Ut posuere metus eget enim scelerisque semper.</h3>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit leo nisl, eget eleifend nibh sollicitudin a. Aliquam sagittis facilisis velit ut pharetra. Fusce mattis odio et porta aliquet. Cras eu augue in tortor lobortis elementum. Nunc fringilla, neque eget rhoncus dapibus, ligula felis placerat sem, a mattis leo justo ac mauris. Nunc accumsan dui quis nisi fringilla scelerisque. Nullam porta ultricies augue sed sollicitudin. Donec eget augue quis lacus cursus tempor vitae at velit. Vestibulum vel odio et magna sodales rutrum. Cras tincidunt vel est sed porta. Proin mattis lectus sit amet tellus interdum, nec mattis augue vehicula. Quisque semper ut ipsum ac posuere. Pellentesque quis scelerisque lorem. Pellentesque pharetra augue porttitor orci dapibus, ac ultrices purus gravida.
											<p>


											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						@stop

						@section('script')
						<script type="text/javascript">

						$('#tanggal').datetimepicker({
							ignoreReadonly: true
						});
						</script>
						@stop