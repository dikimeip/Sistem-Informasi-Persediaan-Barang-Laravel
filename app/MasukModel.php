<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasukModel extends Model
{
    protected $table = 'masuk';


	public function Barang()
	{
		return $this->belongsTo('App\BarangModel');
	}

	public function Suplier()
	{
		return $this->belongsTo('App\SuplierModel');
	}

}
