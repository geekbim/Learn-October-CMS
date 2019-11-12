<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbimanyugatyadhaneswaraMovies extends Migration
{
    public function up()
    {
        Schema::create('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abimanyugatyadhaneswara_movies_');
    }
}
