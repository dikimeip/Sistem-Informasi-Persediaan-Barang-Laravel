<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangkeluarMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Keluar',function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Pelanggan_id');
            $table->unsignedBigInteger('Barang_id');
            $table->foreign('Pelanggan_id')->references('id')->on('Pelanggan')->onDelete('cascade');
            $table->foreign('Barang_id')->references('id')->on('Barang')->onDelete('cascade');
            $table->date('tgl_keluar');
            $table->string('jumlah_keluar');
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
        Schema::dropIfExists('Keluar');
    }
}
