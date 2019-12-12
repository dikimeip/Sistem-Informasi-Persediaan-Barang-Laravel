@extends('master.master')
@section('isi')
<h1>TAMBAH PELANGGAN</h1>
<br>
<hr>
<form action="" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label>MASUKAN NAMA PELANGGAN</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN ALAMAT PELANGGAN</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN NO HP PELANGGAN</label>
		<input type="text" name="no" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN EMAIL PELANGGAN</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN FOTO PELANGGAN</label>
		<input type="text" name="foto" class="form-control">
	</div>
	<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</form>	
@endsection