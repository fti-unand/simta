<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_proposal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tugas_akhir_id');
            $table->date('tanggal');
            $table->time('jam');
            $table->integer('ruangan_id');
            $table->string('nilai_huruf', 20)->nullable();
            $table->integer('status_seminar');
            $table->date('deadline_semhas')->nullable();
            $table->timestamps();

            $table->foreign('tugas_akhir_id')->references('id')->on('tugas_akhir');
            $table->foreign('ruangan_id')->references('id')->on('ruangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_proposal');
    }
}
