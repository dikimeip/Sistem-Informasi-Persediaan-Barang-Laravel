<?php

use Illuminate\Database\Seeder;
use App\KeluarModel;


class KeluarSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KeluarModel::create([
        	'pelanggan_id' => 1,
        	'barang_id' => 2,
        	'tgl_keluar' => '2019-12-14',
        	'jumlah_keluar' => 10
        ]);
    }
}
