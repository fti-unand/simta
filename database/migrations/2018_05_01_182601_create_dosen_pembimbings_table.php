<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenPembimbingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_pembimbing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tugas_akhir_id')->unsigned();
            $table->integer('dosen_id')->unsigned();
            $table->string('jabatan');
            $table->timestamps();

            $table->foreign('tugas_akhir_id')->references('id')->on('tugas_akhir');
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
        Schema::dropIfExists('ta_pembimbing');
    }
}
