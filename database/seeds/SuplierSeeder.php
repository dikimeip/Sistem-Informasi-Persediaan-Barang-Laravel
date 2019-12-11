<?php

use Illuminate\Database\Seeder;
use App\SuplierModel;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuplierModel::create([
        	'nama_suplier' => 'CV Indah Sejahtra',
        	'alamat_suplier' => 'Jln Surodinawan No 43',
        	'no_hp_suplier' => '087412341234',
        	'email_suplier' => 'indahsejahtra@gmail.com',
        	'pj_suplier' => 'amin aminudin',
        	'tanggal_suplier' => date('Y-m-d')
        ]);
    }
}
