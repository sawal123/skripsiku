<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid_info');
            $table->string('uuid_user');
            $table->string('akad');
            $table->string('resepsi');
            $table->string('tempat');
            $table->string('pukul_akad');
            $table->string('pukul_resepsi');
            $table->timestamps();
            // $table->foreign('uuid_info')->references('uuid')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
