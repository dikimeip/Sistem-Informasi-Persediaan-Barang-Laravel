@extends('master.master')
@section('isi')
<h1>TAMBAH BARANG KELUAR</h1>
<hr>
<form action="{{route('user.do_masuk')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label>MASUKAN NAMA PELANGGAN</label>
		<select name="pelanggan" class="form-control">
			@foreach($pelanggan as $p)
				<option value="{{$p->id}}">{{$p->nama_pelanggan}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN NAMA BARANG</label>
		<select name="barang" class="form-control">
			@foreach($barang as $b)
			<option value="{{$b->id}}">{{$b->nama_barang}} || Stok : {{$b->stok_barang}} </option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN JUMLAH BARANG</label>
		<input type="number" name="jumlah" class="form-control" required="">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection