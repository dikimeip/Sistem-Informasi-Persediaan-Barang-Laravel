<?php

use Illuminate\Database\Seeder;
use App\PelangganModel;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PelangganModel::create([
        	'nama_pelanggan' => 'Toko Jaya Pangan',
        	'alamat_pelanggan' => 'Lamongan',
        	'no_hp_pelanggan' => '0832123412112',
        	'email_pelanggan' => 'jaya_pangan@gmail.com',
        	'foto_pelanggan' => '-'
        ]);
    }
}
