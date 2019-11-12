<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbimanyugatyadhaneswaraMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('abimanyugatyadhaneswara_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abimanyugatyadhaneswara_movies_genres');
    }
}
