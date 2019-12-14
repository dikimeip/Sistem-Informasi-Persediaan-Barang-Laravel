@extends('master.master')
@section('isi')
<h1>DATA BARANG MASUK</h1>
<div class="row">
	<div class="col-md-8">
		<a href="" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control">
			</div>
		</form>
	</div>
</div>
<table class="table table-hover">
	<tr>
		<th>NAMA BARANG</th>
		<th>NAMA SUPLIER</th>
		<th>TANGGAL MASUK</th>
		<th>JUMLAH</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $d)
	<tr>
		<td>{{$d->Barang->nama_barang}}</td>
		<td>{{$d->Suplier->nama_suplier}}</td>
		<td>{{$d->tgl_masuk}}</td>
		<td>{{$d->jumlah_masuk}}</td>
		<td>
			<a href="" class="btn btn-info">SHOW</a>
			<a href="" class="btn btn-danger">HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection
