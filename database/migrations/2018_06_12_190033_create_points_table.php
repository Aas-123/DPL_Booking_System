<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('team_id');
            $table->string('teams',55);
            $table->integer('played');
            $table->integer('won');
            $table->integer('draw');
            $table->integer('lost');
            $table->integer('point');
            $table->unsignedInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('users')->ondelete('cascade')->onupdate('cascade');
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
        Schema::dropIfExists('points');
    }
}
