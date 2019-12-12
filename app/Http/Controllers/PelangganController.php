<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PelangganModel;
use Session;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PelangganModel::all();
        return view('user.pelanggan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambahpelanggan');
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
            'no' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'image';
        $file->move($path,$org);

        $PelangganModel = new PelangganModel;
        $PelangganModel->nama_pelanggan = $request->nama;
        $PelangganModel->alamat_pelanggan = $request->alamat;
        $PelangganModel->no_hp_pelanggan = $request->no;
        $PelangganModel->email_pelanggan = $request->email;
        $PelangganModel->foto_pelanggan = $org;
        $PelangganModel->save();

        Session::flash('success','data berhasil ditambahkan');
        return redirect()->route('user.pelanggan');

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
        $data = PelangganModel::find($id);
        return view('user.editpelanggan',compact('data'));
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
            'no' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $foto = $request->file('foto');
        if ($foto == "") {
            $PelangganModel =PelangganModel::find($id);
            $PelangganModel->nama_pelanggan = $request->nama;
            $PelangganModel->alamat_pelanggan = $request->alamat;
            $PelangganModel->no_hp_pelanggan = $request->no;
            $PelangganModel->email_pelanggan = $request->email;
            $PelangganModel->save();
            Session::flash('success','data berhasil diupdate');
            return redirect()->route('user.pelanggan');
        } else {
            $file = $request->file('foto');
            $org = $file->getClientOriginalName();
            $path = 'image';
            $file->move($path,$org);

            $PelangganModel =PelangganModel::find($id);
            $PelangganModel->nama_pelanggan = $request->nama;
            $PelangganModel->alamat_pelanggan = $request->alamat;
            $PelangganModel->no_hp_pelanggan = $request->no;
            $PelangganModel->email_pelanggan = $request->email;
            $PelangganModel->foto_pelanggan = $org;
            $PelangganModel->save();
            Session::flash('success','data berhasil diupdate');
            return redirect()->route('user.pelanggan');

        }
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
