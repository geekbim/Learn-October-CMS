<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbimanyugatyadhaneswaraMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('abimanyugatyadhaneswara_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
            $table->text('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abimanyugatyadhaneswara_movies_actors');
    }
}
