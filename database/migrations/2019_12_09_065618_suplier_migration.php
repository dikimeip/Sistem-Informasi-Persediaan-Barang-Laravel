<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuplierMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Suplier',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nama_suplier');
            $table->string('alamat_suplier');
            $table->string('no_hp_suplier');
            $table->string('email_suplier');
            $table->string('pj_suplier');
            $table->date('tanggal_suplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Suplier');
    }
}
