<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Foreign Key id surat masuk
            $table->unsignedBigInteger('id_pengajuan_surat')->nullable();
            $table->foreign('id_pengajuan_surat')->references('id')->on('pengajuan_surat');
            // Foreign Key id User
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
          
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
        Schema::dropIfExists('_disposisi');
    }
}
