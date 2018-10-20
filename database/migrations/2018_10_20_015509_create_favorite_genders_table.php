<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_genders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parther_id');
            $table->foreign('parther_id')->references('id')->on('parthers')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('favorite_genders');
    }
}
