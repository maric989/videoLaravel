<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file_path');
            $table->timestamps();
        });

        Schema::create('movie_category', function (Blueprint $table) {
            $table->integer('movie_id');
            $table->integer('category_id');
            $table->primary(['movie_id' , 'category_id']);


        });

        Schema::create('movie_actor', function (Blueprint $table) {
            $table->integer('movie_id');
            $table->integer('actor_id');
            $table->primary(['movie_id' , 'actor_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
        Schema::dropIfExists('movie_category');
        Schema::dropIfExists('movie_actor');
    }
}
