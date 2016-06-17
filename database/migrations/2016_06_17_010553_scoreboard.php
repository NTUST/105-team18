<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scoreboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('score', function (Blueprint $table) {
                $table->integer('score_no')->index();
                $table->integer('from_no');
                $table->integer('to_no');
                $table->integer('layout');
                $table->integer('design');
                $table->integer('technology');
                $table->integer('idea');
                $table->integer('other');
                $table->string('comment');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('score');
    }
}
