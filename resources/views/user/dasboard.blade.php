@extends('master.master')
@section('isi')
	<h1>Welcome To Dasboard {{auth()->user()->name}} </h1>
	<hr>
	<br>
	<div class="row">
		<div class="col-md-4">
			<div class="alert alert-info">
				<p class="text-center"><b>BARANG</b></p>
				<p>Jumlah Produk : {{count($barang)}} Barang</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="alert alert-info">
				<p class="text-center"><b>SUPLIER</b></p>
				<p>Jumlah Suplier : {{count($suplier)}} Suplier</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="alert alert-info">
				<p class="text-center"><b>PELANGGAN</b></p>
				<p>Jumlah Pelanggan : {{count($pelanggan)}} Pelanggan</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="alert alert-info">
				<p class="text-center"><b>BARANG MASUK</b></p>
				<p>Jumlah Produk Masuk : {{count($masuk)}} Produk Masuk</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="alert alert-info">
				<p class="text-center"><b>BARANG KELUAR</b></p>
				<p>Jumlah Produk Keluar : {{count($keluar)}} Produk keluar</p>
			</div>
		</div>
	</div>
@endsection