@extends('master.master')
@section('isi')
<h1>TAMBAH TRANSAKSI MASUK</h1>
<hr>
<form action="{{route('user.do_tambah_masuk')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label>MASUKAN NAMA BARANG</label>
		<select name="barang" class="form-control">
			@foreach($barang as $b)
				<option value="{{$b->id}}">{{$b->nama_barang}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN NAMA SUPLIER</label>
		<select name="suplier" class="form-control">
			@foreach($suplier as $s)
				<option value="{{$s -> id}}">{{$s->nama_suplier}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN NAMA BARANG</label>
		<input type="number" name="jumlah" class="form-control" required="">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection