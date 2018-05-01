<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_sidang', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_daftar')->nullable();
            $table->date('tanggal_sidang')->nullable();
            $table->time('jam')->nullable();
            $table->integer('ruangan_id')->nullable();
            $table->integer('nilai_angka')->nullable();
            $table->string('nilai_huruf', 20)->nullable();
            $table->integer('status_sidang');
            $table->integer('semhas_id');
            $table->date('deadline_syarat_penilaian')->nullable();
            $table->timestamps();

            $table->foreign('ruangan_id')->references('id')->on('ruangan');
            $table->foreign('semhas_id')->references('id')->on('ta_semhas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_sidang');
    }
}
