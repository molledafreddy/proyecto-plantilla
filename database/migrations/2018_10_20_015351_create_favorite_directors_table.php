<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_directors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parther_id');
            $table->foreign('parther_id')->references('id')->on('parthers')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('favorite_directors');
    }
}
