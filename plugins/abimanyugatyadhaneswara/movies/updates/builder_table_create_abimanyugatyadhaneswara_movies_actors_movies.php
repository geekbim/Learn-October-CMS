<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbimanyugatyadhaneswaraMoviesActorsMovies extends Migration
{
    public function up()
    {
        Schema::create('abimanyugatyadhaneswara_movies_actors_movies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abimanyugatyadhaneswara_movies_actors_movies');
    }
}
