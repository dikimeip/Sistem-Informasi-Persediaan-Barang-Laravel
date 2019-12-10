@extends('master.master')
@section('isi')
<h1>DATA BARANG</h1>
<br>
<div class="row">
	<div class="col-md-9">
		<a href="{{route('user.barang_tambah')}}" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-3">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Barang">
			</div>
		</form>
	</div>
</div>
@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
<hr>
<table class="table table-hover">
	<tr>
		<th>NAMA</th>
		<th>KATEGORI</th>
		<th>STOK</th>
		<th>HARGA</th>
		<th>EXP</th>
		<th>AKSI</th>
	</tr>
	@foreach($barang as $b)
	<tr>
		<td>{{$b->nama_barang}}</td>
		<td>{{$b->kategori_barang}}</td>
		<td>{{$b->stok_barang}}</td>
		<td>{{$b->harga_barang}}</td>
		<td>{{$b->expired_barang}}</td>
		<td>
			<a href="{{route('user.edit_barang',$b->id)}}" class="btn btn-warning btn-sm">EDIT</a>
			<a href="" class="btn btn-danger btn-sm">HAPUS</a>
			<a href="" class="btn btn-success btn-sm">SHOW</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection