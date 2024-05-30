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
            $table->string('uuid_user');
            $table->string('fotopria')->nullable();
            $table->string('fotowanita')->nullable();
            $table->string('fotocerita1')->nullable();
            $table->string('fotocerita2')->nullable();
            $table->string('fotocerita3')->nullable();
            $table->string('fotocerita4')->nullable();
            $table->timestamps();
            // $table->foreign('uuid_foto')->references('uuid')->on('users');
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
