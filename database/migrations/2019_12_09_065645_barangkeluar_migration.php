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
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');
            $table->date('tgl_keluar');
            $table->integer('jumlah_keluar');
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
