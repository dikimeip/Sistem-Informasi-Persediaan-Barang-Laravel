<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasukModel extends Model
{
    protected $table = 'masuk';


	public function Barang()
	{
		return $this->belongsToMany('App\BarangModel');
	}

	public function Suplier()
	{
		return $this->belongsToMany('App\SuplierModel');
	}

}
