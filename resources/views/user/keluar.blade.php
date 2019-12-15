@extends('master.master')
@section('isi')
<h1>DATA BARANG KELUAR</h1>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('user.tambahkeluar')}}" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="masukan tanggal barang keluar">
			</div>
		</form>
	</div>
</div>
@if(session::has('success'))
	<div class="alert alert-info">
		<p>{{session::get('success')}}</p>
	</div>
@endif
<table class="table table-hover">
	<tr>
		<th>NAMA PEMBELI</th>
		<th>NAMA BARANG</th>
		<th>TGL PEMBELIAN</th>
		<th>JUMLAH</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $d)
	<tr>
		<td>{{$d->Pelanggan->nama_pelanggan}}</td>
		<td>{{$d->barang->nama_barang}}</td>
		<td>{{$d->tgl_keluar}}</td>
		<td>{{$d->jumlah_keluar}}</td>
		<td>
			<a href="" class="btn btn-info">DETAIL</a>
			<a href="" class="btn btn-danger">HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection