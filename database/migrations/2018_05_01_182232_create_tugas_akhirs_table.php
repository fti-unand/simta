<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasAkhirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->text('deskripsi_judul')->nullable();
            $table->date('mulai_ta')->nullable();
            $table->integer('konsentrasi_id');
            $table->integer('mahasiswa_id')->unsigned();
            $table->integer('status');
            $table->string('nilai_ta', 50)->nullable();
            $table->date('deadline_sempro')->nullable();
            $table->timestamps();

            $table->foreign('konsentrasi_id')->references('id')->on('konsentrasi');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas_akhir');
    }
}
