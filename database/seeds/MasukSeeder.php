<?php

use Illuminate\Database\Seeder;
use App\MasukModel;

class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasukModel::create([
        	'Suplier_id' => 2,
        	'Barang_id' => 14,
        	'tgl_masuk' => '2019-12-14',
        	'jumlah_masuk' => 5
        ]);
    }
}
