@extends('master.master')
@section('isi')
<h1>TAMBAH SUPLIER</h1>
<hr>
<form>
	<div class="form-group">
		<label>MASUKAN SUPLYER</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>ALAMAT SUPLYER</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<div class="form-group">
		<label>NO HP SUPLYER</label>
		<input type="text" name="hp" class="form-control">
	</div>
	<div class="form-group">
		<label>EMAIL SUPLYER</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>PENANGGUNG JAWAB SUPLYER</label>
		<input type="text" name="pj" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection