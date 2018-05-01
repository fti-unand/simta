<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidangPengujisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidang_pengujis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id');
            $table->integer('sidang_id');
            $table->string('jabatan');
            $table->timestamps();

            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->foreign('sidang_id')->references('id')->on('ta_sidang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidang_pengujis');
    }
}
