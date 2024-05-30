<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengantinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengantins', function (Blueprint $table) {
            $table->id();
            $table->string('uuid_pengantin');
            $table->string('uuid_user');
            $table->string('nama_pria');
            $table->string('nama_wanita');
            $table->string('nama_ayah_pria');
            $table->string('nama_ayah_wanita');
            $table->string('nama_ibu_pria');
            $table->string('nama_ibu_wanita');
            $table->string('story_pria');
            $table->string('story_wanita');
            $table->string('slug');
            $table->timestamps();
            // $table->foreign('uuid_user')->references('uuid')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengantins');
    }
}
