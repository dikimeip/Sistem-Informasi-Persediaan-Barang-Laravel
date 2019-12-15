<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KeluarModel;
use App\BarangModel;
use App\PelangganModel;
use Session;

class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KeluarModel::all();
        return view('user.keluar',compact('data'));
    }

     public function search(Request $request)
    {
        $cari = $request->get('cari');
        $data = KeluarModel::where('tgl_keluar','LIKE','%'.$cari.'%')->get();
        return view('user.keluar',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = PelangganModel::all();
        $barang = BarangModel::all();
        return view('user.tambah_keluar',compact('pelanggan','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $KeluarModel = new KeluarModel;
        $KeluarModel->pelanggan_id = $request->pelanggan;
        $KeluarModel->barang_id = $request->barang;
        $KeluarModel->tgl_keluar = date('Y-m-d');
        $KeluarModel->jumlah_keluar = $request->jumlah;
        $KeluarModel->save();

        $BarangModel = BarangModel::find($request->barang);
        $BarangModel->stok_barang = $BarangModel->stok_barang - $request->jumlah;
        $BarangModel->save();

        Session::flash('success','Data Berhasil Ditambahkan');
        return redirect()->route('user.keluar');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KeluarModel::find($id);
        return view('user.show_keluar',compact('data'));
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
        $KeluarModel =  KeluarModel::find($id);
        $KeluarModel->delete();
        Session::flash('success','Data Berhasil Dihapus');
        return redirect()->route('user.keluar');
    }
}
