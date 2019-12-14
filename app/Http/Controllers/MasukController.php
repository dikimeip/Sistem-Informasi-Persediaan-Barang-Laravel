<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasukModel;
use App\BarangModel;
use App\SuplierModel;
use Session;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MasukModel::all();
        return view('user.masuk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = BarangModel::all();
        $suplier = SuplierModel::all();
        return view('user.tambah_masuk',compact('barang','suplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $MasukModel = new MasukModel;
        $MasukModel->suplier_id = $request->barang;
        $MasukModel->barang_id = $request->suplier;
        $MasukModel->tgl_masuk = date('Y-m-d');
        $MasukModel->jumlah_masuk = $request->jumlah;
        $MasukModel->save();

        $BarangModel = BarangModel::find($request->barang);
        $BarangModel->stok_barang = $BarangModel->stok_barang + $request->jumlah;
        $BarangModel->save();

        Session::flash('success','Data Success Submit');
        return redirect()->route('user.masuk');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show_masuk');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
