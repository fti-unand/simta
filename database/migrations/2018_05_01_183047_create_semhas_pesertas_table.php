<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemhasPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_semhas_peserta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semhas_id');
            $table->integer('mahasiswa_id');
            $table->string('jabatan');
            $table->timestamps();

            $table->foreign('semhas_id')->references('id')->on('ta_semhas');
            $table->foreign('dosen_id')->references('id')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_semhas_peserta');
    }
}
