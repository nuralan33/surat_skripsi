<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Foreign Key id Jenis Surat
            $table->unsignedBigInteger('id_jenis_surat');
            $table->foreign('id_jenis_surat')->references('id')->on('jenis_surat');
            // Foreign Key id User
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->string('tanggal');
            $table->string('keterangan');
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
        Schema::dropIfExists('pengajuan_surat');
    }
}
