<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_bimbingan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tugas_akhir_id');
            $table->date('tanggal');
            $table->string('progress');
            $table->text('catatan')->nullable();
            $table->string('file');
            $table->string('pembimbing', 50)->nullable();
            $table->integer('status_bimbingan');
            $table->timestamps();

            $table->foreign('tugas_akhir_id')->references('id')->on('tugas_akhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_bimbingan');
    }
}
