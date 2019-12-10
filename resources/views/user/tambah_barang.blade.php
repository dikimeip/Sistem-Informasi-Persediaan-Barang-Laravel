@extends('master.master')
@section('isi')
<h1>TAMBAH BARANG</h1>
<br>
<hr>
<form>
	<div class="form-group">
		<label>Masukan Nama Barang</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Kategori Barang</label>
		<input type="text" name="kategori" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Stok Barang</label>
		<input type="text" name="stok" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Harga Barang</label>
		<input type="text" name="harga" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Expired Barang</label>
		<input type="date" name="exp" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Foto Barang</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</form>	
@endsection