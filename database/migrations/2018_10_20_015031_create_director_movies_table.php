<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('director_movies');
    }
}
