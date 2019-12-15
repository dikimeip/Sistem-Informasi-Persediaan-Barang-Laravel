@extends('master.master')
@section('isi')
<h1>DATA SUPLIER</h1>
<br>
<div class="row">
	<div class="col-md-9">
		<a href="{{route('user.tambah_suplier')}}" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-3">
		<form action="{{route('user.search_suplier')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Suplier">
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
		<th>PJ</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $b)
	<tr>
		<td>{{$b->nama_suplier}}</td>
		<td>{{$b->alamat_suplier}}</td>
		<td>{{$b->no_hp_suplier}}</td>
		<td>{{$b->email_suplier}}</td>
		<td>{{$b->pj_suplier}}</td>
		<td>
			<a href="{{route('user.editsuplier',$b->id)}}" class="btn btn-info btn-sm">EDIT</a>
			<a href="{{route('user.hapussuplier',$b->id)}}" onclick="return confirm('Yakin Data dihapus.?')" class="btn btn-danger btn-sm">HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection