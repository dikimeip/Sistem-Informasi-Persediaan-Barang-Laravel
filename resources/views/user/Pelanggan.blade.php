@extends('master.master')
@section('isi')
<h1>DATA PELANGGAN</h1>
<br>
<div class="row">
	<div class="col-md-9">
		<a href="{{route('user.tambahpelanggan')}}" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-3">
		<form action="{{route('user.cari_pelanggan')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Pelanggan">
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
		<th>ALAMAT</th>
		<th>NO HP</th>
		<th>EMAIL</th>
		<th>FOTO</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $b)
	<tr>
		<td>{{$b->nama_pelanggan}}</td>
		<td>{{$b->alamat_pelanggan}}</td>
		<td>{{$b->no_hp_pelanggan}}</td>
		<td>{{$b->email_pelanggan}}</td>
		<td><img style="width: 50px" src="{{asset('image/'.$b->foto_pelanggan)}}"></td>
		<td>
			<a href="{{route('user.editpelanggan',$b->id)}}" class="btn btn-info btn-sm">EDIT</a>
			<a href="{{route('user.deletepelanggan',$b->id)}}" onclick="return confirm('Yakin Akan Menghapus Data..??')" class="btn btn-danger btn-sm">HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection