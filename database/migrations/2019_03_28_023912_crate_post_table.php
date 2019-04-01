<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CratePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tamu_lama', function (Blueprint $table) {
            $table->integer('id_anggota');
            $table->string('nama');
            $table->string('jurusan');
            $table->string('ukuran_kaos');
            $table->string('foto');
            $table->string('ttd');
            $table->timestamp('waktu');
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
        Schema::dropIfExists('tb_tamu_lama');
    }
}
