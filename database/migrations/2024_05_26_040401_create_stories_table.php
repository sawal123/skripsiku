<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('uuid_story');
            $table->string('uuid_user');
            $table->string('kenal')->nullable();
            $table->string('dekat')->nullable();
            $table->string('pacaran')->nullable();
            $table->string('menikah')->nullable();
            $table->timestamps();
            // $table->foreign('uuid_story')->references('uuid')->on('users');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
}
