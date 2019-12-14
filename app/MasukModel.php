<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasukModel extends Model
{
    protected $table = 'masuk';
}

public function BarangModel()
{
	return $this->belongsTo('App\BarangModel');
}

public function SuplierModel()
{
	return $this->belongsTo('App\SuplierModel');
}
