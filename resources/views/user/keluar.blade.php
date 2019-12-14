@extends('master.master')
@section('isi')
<h1>DATA BARANG KELUAR</h1>
<div class="row">
	<div class="col-md-8">
		<a href="" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="masukan tanggal barang keluar">
			</div>
		</form>
	</div>
</div>
<table class="table table-hover">
	<tr>
		<th>NAMA PEMBELI</th>
		<th>NAMA BARANG</th>
		<th>TGL PEMBELIAN</th>
		<th>JUMLAH</th>
		<th>AKSI</th>
	</tr>
</table>
@endsection