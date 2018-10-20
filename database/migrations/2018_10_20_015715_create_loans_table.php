<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['prestamo','devuelta','espera']);
            $table->unsignedInteger('parther_id');
            $table->foreign('parther_id')->references('id')->on('parthers')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('loans');
    }
}
