@extends('master.master')
@section('isi')
	<h1>SHOW DATA BARANG</h1>
	<br>
	<b>Nama Barang</b>
	<p>{{$data->nama_barang}}</p>
	<b>Kategori Barang</b>
	<p>{{$data->kategori_barang}}</p>
	<b>Stok Barang</b>
	<p>{{$data->stok_barang}}</p>
	<b>Harga Barang</b>
	<p>{{$data->harga_barang}}</p>
	<b>Tanggal Masuk Barang</b>
	<p>{{$data->tgl_masuk_barang}}</p>
	<b>Expired Date Barang</b>
	<p>{{$data->expired_barang}}</p>
	<br>
	<img style="width: 300px" src="{{asset('image/'.$data->foto_barang)}}">
@endsection