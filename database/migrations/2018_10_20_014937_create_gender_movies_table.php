<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gender_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('gender_movies');
    }
}
