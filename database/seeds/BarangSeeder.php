<?php

use Illuminate\Database\Seeder;
use App\BarangModel;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BarangModel::create([
        	'nama_barang' => 'pepsodent',
        	'kategori_barang' => 'deterjen',
        	'stok_barang' => '100',
        	'harga_barang' => '4000',
        	'tgl_masuk_barang' => '2019-12-12',
        	'expired_barang' => '2020-12-12',
        	'foto_barang' => '-'
        ]);
    }
}
