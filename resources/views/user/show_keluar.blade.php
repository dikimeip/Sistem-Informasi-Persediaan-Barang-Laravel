@extends('master.master')
@section('isi')
<h1>DETAIL BARANG KELUAR</h1>
	<br>
	<b>Nama Suplier</b>
	<p>{{$data->Pelanggan->nama_pelanggan}}</p>
	<b>Alamat Suplier</b>
	<p>{{$data->Pelanggan->alamat_pelanggan}}</p>
	<b>No HP Suplier</b>
	<p>{{$data->Pelanggan->no_hp_pelanggan}}</p>
	<b>Nama Barang</b>
	<p>{{$data->Barang->nama_barang}}</p>
	<b>Stok Barang</b>
	<p>{{$data->Barang->stok_barang}}</p>
	<b>EXP Barang</b>
	<p>{{$data->Barang->expired_barang}}</p>
	<b>Tanggal Masuk Keluar</b>
	<p>{{$data->tgl_keluar}}</p>
	<b>JUMLAH BARANG Keluar</b>
	<p>{{$data->jumlah_keluar}}</p>
@endsection