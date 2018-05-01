<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_semhas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_daftar');
            $table->date('tanggal')->nullable();
            $table->integer('ruangan_id')->nullable();
            $table->time('jam')->nullable();
            $table->integer('rekomendasi')->nullable();
            $table->date('deadline_sidang')->nullable();
            $table->integer('proposal_id');
            $table->integer('status_pengajuan')->nullable();
            $table->timestamps();

            $table->foreign('ruangan_id')->references('id')->on('ruangan');
            $table->foreign('proposal_id')->references('id')->on('proposal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_semhas');
    }
}
