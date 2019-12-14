<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeluarModel extends Model
{
    protected $table = 'keluar';

    public function Pelanggan()
    {
    	return $this->belongsTo('App\PelangganModel');
    }

    public function Barang()
    {
    	return $this->belongsTo('App\BarangModel');
    }
}
