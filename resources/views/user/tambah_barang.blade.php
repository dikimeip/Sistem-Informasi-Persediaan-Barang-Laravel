@extends('master.master')
@section('isi')
<h1>TAMBAH BARANG</h1>
<br>
<hr>
<form action="{{route('user.do_barang_tambah')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label>Masukan Nama Barang</label>
		<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
		<label class="invalid-feedback">Nama Harus Disi</label>
	</div>
	<div class="form-group">
		<label>Masukan Kategori Barang</label>
		<input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror">
		<label class="invalid-feedback">Kategori Harus Disi</label>
	</div>
	<div class="form-group">
		<label>Masukan Stok Barang</label>
		<input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror">
		<label class="invalid-feedback">Stok Invalid</label>
	</div>
	<div class="form-group">
		<label>Masukan Harga Barang</label>
		<input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror">
		<label class="invalid-feedback">Harga Invalid</label>
	</div>
	<div class="form-group">
		<label>Masukan Expired Barang</label>
		<input type="date" name="exp" class="form-control @error('exp') is-invalid @enderror">
		<label class="invalid-feedback">exp Harus Disi</label>
	</div>
	<div class="form-group">
		<label>Masukan Foto Barang</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</form>	
@endsection