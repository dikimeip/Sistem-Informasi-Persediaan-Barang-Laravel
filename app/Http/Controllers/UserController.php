<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasukModel;
use App\BarangModel;
use App\SuplierModel;
use App\KeluarModel;
use App\PelangganModel;

class UserController extends Controller
{
    public function index()
    {
    	$barang = BarangModel::all();
    	$masuk = MasukModel::all();
    	$suplier = SuplierModel::all();
    	$keluar = KeluarModel::all();
    	$pelanggan = PelangganModel::all();
    	return view('user.dasboard',compact('barang','masuk','suplier','keluar','pelanggan'));
    }


    public function logout()
    {
    	auth()->logout();
    	return redirect('/');
    }


}
