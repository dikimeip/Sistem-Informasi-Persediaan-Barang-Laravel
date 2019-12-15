@extends('master.master')
@section('isi')
<h1>TAMBAH BARANG KELUAR</h1>
<hr>
<form>
	<div class="form-group">
		<label>MASUKAN NAMA PELANGGAN</label>
		<select name="pelanggan" class="form-control">
			<option>COBA</option>
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN NAMA BARANG</label>
		<select name="barang" class="form-control">
			<option>COBA</option>
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN JUMLAH BARANG</label>
		<input type="number" name="jumlah" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection