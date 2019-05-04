<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semester_id');
            $table->String('kode_mk');
            $table->String('nama_mk');
            $table->integer('sks');
            $table->String('pt');
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
        Schema::dropIfExists('pengajarans');
    }
}
