@extends('master.master')
@section('isi')
<h1>DATA BARANG MASUK</h1>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('user.tambah_masuk')}}" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form action="{{route('user.cari_masuk')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Tanggal Masuk">
			</div>
		</form>
	</div>
</div>
@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
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
			<a href="{{route('user.show_masuk',$d->id)}}" class="btn btn-info">SHOW</a>
			<a href="{{route('user.hapusmasuk',$d->id)}}" class="btn btn-danger" onclick="return confirm('Hapus Data..??')">HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection
