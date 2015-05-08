@extends('layouts.frontpage')
@section('content')

<form class="form-horizontal">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="title" placeholder="Judul">
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" name="price" class="form-control" id="price" placeholder="Harga">
    </div>
  </div>
  <div class="form-group">
    <label for="price_include" class="col-sm-2 control-label">Harga Termasuk</label>
    <div class="col-sm-10">
      <textarea type="text" name="price_include" class="form-control summernote" id="price_include" placeholder="Harga Termasuk" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
   <label for="price_exclude" class="col-sm-2 control-label">Harga Diluar</label>
    <div class="col-sm-10">
      <textarea type="text" name="price_exclude" class="form-control summernote" id="price_exclude" placeholder="Harga diluar" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="exclamation_note" class="col-sm-2 control-label">Informasi Penting</label>
    <div class="col-sm-10">
      <textarea name="exclamation_note" class="form-control summernote" id="exclamation_note" placeholder="Informasi Penting" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="main_pic" class="col-sm-2 control-label">Gambar Utama</label>
    <div class="col-sm-10">
      <input type="file" name="main_pic" class="form-control" id="main_pic">
    </div>
  </div>
  <div class="form-group">
    <label for="pic1" class="col-sm-2 control-label">Gambar Tambahan 1</label>
    <div class="col-sm-10">
      <input type="file" name="pic1" class="form-control" id="pic1">
    </div>
  </div>
  <div class="form-group">
    <label for="pic2" class="col-sm-2 control-label">Gambar Tambahan 2</label>
    <div class="col-sm-10">
      <input type="file" name="pic2" class="form-control" id="pic2">
    </div>
  </div>
  <div class="form-group">
    <label for="pic3" class="col-sm-2 control-label">Gambar Tambahan 3</label>
    <div class="col-sm-10">
      <input type="file" name="pic3" class="form-control" id="pic3">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Deskripsi Kegiatan</label>
    <div class="col-sm-10">
      <textarea name="description" rows="10" class="form-control summernote" id="description" placeholder="Kegiatan"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

@stop

@section('script')
<script type="text/javascript">
$(document).ready(function() {
  $('.summernote').summernote({height: 250});
});
</script>
@stop