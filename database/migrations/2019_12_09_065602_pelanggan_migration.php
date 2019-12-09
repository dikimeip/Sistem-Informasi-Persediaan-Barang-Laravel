<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PelangganMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pelanggan',function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pelanggan');
            $table->string('alamat_pelanggan');
            $table->string('no_hp_pelanggan');
            $table->string('email_pelanggan');
            $table->string('foto_pelanggan');
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
        Schema::dropIfExists('Pelanggan');
    }
}
