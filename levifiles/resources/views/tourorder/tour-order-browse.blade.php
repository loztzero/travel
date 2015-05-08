@extends('layouts.frontpage')
@section('content')
<h3>Tour Order Admin</h3>
    <form action="" method="get"  class="form-horizontal">
    	<fieldset>
    		<legend>Penyaring</legend>
    		<div class="form-group">
    			<label for="kodeUniversitas" class="col-sm-2 control-label">Kode Universitas</label>
    			<div class="col-sm-3">
    				<input type="text" class="form-control" name="uni_code" autofocus placeholder="Kode">
    			</div>

                <label for="namaUniversitas" class="col-sm-2 control-label">Nama Universitas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="uni_name" placeholder="Nama">
                </div>
    		</div>

    		<div class="form-group">
    			<div class="col-sm-10 col-sm-offset-2">
    				<input type="submit" class="btn btn-primary btn-sm" value="Cari">
    			</div>
    		</div>
    	</fieldset>
    </form>


    <table class="table">
    	<caption style="text-align:left;border-bottom:1px solid #000;">
    		<b>Daftar Tour Order</b>
    	</caption>
    	<thead>
    		<tr>
    			<th style="width:90px;">Aksi</th>
    			<th>Kode Universitas</th>
    			<th>Nama Universitas</th>
    			<th>Alamat</th>
    			<th>Kode Pos</th>
    			<th>Kota</th>
    			<th>Telepon</th>
    			<th>Fax</th>
    			<th>Keterangan</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($tourOrder as $key => $value)
    		<tr>
    			<td>
    				<div>
    					<a class="btn btn-success btn-sm" href="{{ URL::to('universitas/' . $value->ID . '/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>
    					{{ Form::open(array('url' => 'universitas/' . $value->ID, 'class' => 'pull-right')) }}
    					{{ Form::hidden('_method', 'DELETE') }}
    					<button class="btn btn-danger btn-sm" type="submit"><i class="glyphicon glyphicon-remove"></i></button>
    					{{ Form::close() }}
    				</div>
    			</td>
    			<td>{{ $value->UNI_CODE}}</td>
    			<td>{{ $value->UNI_NAME}}</td>
    			<td>{{ $value->ADDRS1 }}<br>{{ $value->ADDRS2 }}<br>{{ $value->ADDRS3 }}</td>
    			<td>{{ $value->ZIP_CODE}}</td>
    			<td>{{ $value->CITY_NAME}}</td>
    			<td>{{ $value->PHN_1}}<br>{{ $value->PHN_2}}<br>{{ $value->PHN_3}}</td>
    			<td>{{ $value->FAX_1}}<br>{{ $value->FAX_2}}<br>{{ $value->FAX_3}}</td>
    			<td>{{ $value->DSCR}}</td>
    		</tr>
    		@endforeach
    	</tbody>
    	<tfoot>
    		<tr>
    			<td colspan="10">
    				<div class="pagination">
					<!-- appends(Input::except('page'))
					appends(Input::only('data-from', 'date-to')
				-->
				{{-- $tourOrder->appends(Input::only('uni_code', 'uni-name'))->links() --}}
			</div>
		</td>
	</tr>
</tfoot>
</table>
@stop