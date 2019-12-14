<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Barang',function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('kategori_barang');
            $table->integer('stok_barang');
            $table->string('harga_barang');
            $table->date('tgl_masuk_barang');
            $table->date('expired_barang');
            $table->string('foto_barang');
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
        Schema::dropIfExists('Barang');
    }
}
