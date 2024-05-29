<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekenings', function (Blueprint $table) {
                $table->id();
                $table->string('uuid_rek');
                $table->string('namabank')->nullable();
                $table->string('norek')->nullable();
                $table->string('nama')->nullable();
                $table->string('namabank_b')->nullable();
                $table->string('norek_b')->nullable();
                $table->string('nama_b')->nullable();
                $table->timestamps();
                $table->foreign('uuid_rek')->references('uuid')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekenings');
    }
}
