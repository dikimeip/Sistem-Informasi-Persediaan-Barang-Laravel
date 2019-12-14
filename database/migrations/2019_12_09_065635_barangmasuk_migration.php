<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangmasukMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Masuk',function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('suplier_id');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('suplier_id')->references('id')->on('suplier')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');
            $table->date('tgl_masuk');
            $table->integer('jumlah_masuk');
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
        Schema::dropIfExists('Masuk');
    }
}
