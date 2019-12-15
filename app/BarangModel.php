<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';

     protected $fillable = [
        'nama_barang', 'kategori_barang', 'stok_barang','harga_barang','tgl_masuk_barang','expired_barang','	foto_barang'
    ];
}
