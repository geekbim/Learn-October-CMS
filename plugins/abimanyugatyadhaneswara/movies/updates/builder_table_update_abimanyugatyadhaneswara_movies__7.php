<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbimanyugatyadhaneswaraMovies7 extends Migration
{
    public function up()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->text('description')->nullable()->change();
            $table->integer('year')->nullable()->change();
            $table->string('slug', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->text('description')->nullable(false)->change();
            $table->integer('year')->nullable(false)->change();
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
}
