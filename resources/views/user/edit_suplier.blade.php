@extends('master.master')
@section('isi')
<h1>EDIT SUPLIER</h1>
<hr>
<form action="{{route('user.do_tambah_suplier')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label>MASUKAN SUPLYER</label>
		<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$data->nama_suplier}}">
		<label class="invalid-feedback">Nama Harus Diisi</label>
	</div>
	<div class="form-group">
		<label>ALAMAT SUPLYER</label>
		<input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{$data->alamat_suplier}}" >
		<label class="invalid-feedback">Alamat Harus Diisi</label>
	</div>
	<div class="form-group">
		<label>NO HP SUPLYER</label>
		<input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror" value="{{$data->no_hp_suplier}}">
		<label class="invalid-feedback">No HP Harus Diisi</label>
	</div>
	<div class="form-group">
		<label>EMAIL SUPLYER</label>
		<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$data->email_suplier}}">
		<label class="invalid-feedback">Email Harus Valid</label>
	</div>
	<div class="form-group">
		<label>PENANGGUNG JAWAB SUPLYER</label>
		<input type="text" name="pj" class="form-control @error('pj') is-invalid @enderror" value="{{$data->pj_suplier}}" >
		<label class="invalid-feedback">PJ Harus Diisi</label>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection