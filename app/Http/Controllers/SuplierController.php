<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuplierModel;
use Session;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $data = SuplierModel::all();
        return view('user.suplier',compact('data'));
    }

    public function search(Request $request)
    {
        $cari = $request->get('cari');
        $data = SuplierModel::where('nama_suplier','LIKE','%'.$cari.'%')->get();
         return view('user.suplier',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambahsuplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required|numeric',
            'email' => 'required|email',
            'pj' => 'required',
        ]);

        $SuplierModel = new SuplierModel;
        $SuplierModel->nama_suplier = $request->nama;
        $SuplierModel->alamat_suplier = $request->alamat;
        $SuplierModel->no_hp_suplier = $request->hp;
        $SuplierModel->email_suplier = $request->email;
        $SuplierModel->pj_suplier = $request->pj;
        $SuplierModel->tanggal_suplier = date('Y-m-d');
        $SuplierModel->save();

        Session::flash('success','Data Berhasil Ditambahkan');
        return redirect()->route('user.suplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = SuplierModel::find($id);
        return view('user.edit_suplier',compact('data'));
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
         $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required|numeric',
            'email' => 'required|email',
            'pj' => 'required',
        ]);

        $SuplierModel = SuplierModel::find($id);
        $SuplierModel->nama_suplier = $request->nama;
        $SuplierModel->alamat_suplier = $request->alamat;
        $SuplierModel->no_hp_suplier = $request->hp;
        $SuplierModel->email_suplier = $request->email;
        $SuplierModel->pj_suplier = $request->pj;
        $SuplierModel->save();

        Session::flash('success','Data Berhasil Diubah');
        return redirect()->route('user.suplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SuplierModel = SuplierModel::find($id);
        $SuplierModel->delete();

        Session::flash('success','Data Berhasil Dihapus');
        return redirect()->route('user.suplier');
    }
}
