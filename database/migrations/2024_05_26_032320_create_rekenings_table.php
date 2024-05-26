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
                $table->string('namabank');
                $table->string('norek');
                $table->string('nama');
                $table->string('namabank_b');
                $table->string('norek_b');
                $table->string('nama_b');
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
