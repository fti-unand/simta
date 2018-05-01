<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemhasPengujisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_semhas_penguji', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id');
            $table->integer('semhas_id');
            $table->string('jabatan');
            $table->timestamps();

            $table->foreign('dosen_id')->references('id')->on('dosen');
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
        Schema::dropIfExists('ta_semhas_penguji');
    }
}
