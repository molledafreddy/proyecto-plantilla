<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('actor_id');
            $table->foreign('actor_id')->references('id')->on('actors')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('actor_movies');
    }
}
