<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid_foto');
            $table->string('fotopria');
            $table->string('fotowanita');
            $table->string('fotocerita1');
            $table->string('fotocerita2');
            $table->string('fotocerita3');
            $table->string('fotocerita4');
            $table->timestamps();
            $table->foreign('uuid_foto')->references('uuid')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
