<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbimanyugatyadhaneswaraMovies extends Migration
{
    public function up()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->text('description')->default(null)->change();
            $table->integer('year')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->text('description')->default('NULL')->change();
            $table->integer('year')->default(NULL)->change();
        });
    }
}
