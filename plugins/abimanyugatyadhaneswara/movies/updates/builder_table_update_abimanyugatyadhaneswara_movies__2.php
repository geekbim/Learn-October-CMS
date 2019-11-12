<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbimanyugatyadhaneswaraMovies2 extends Migration
{
    public function up()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->string('slug')->nullable();
            $table->text('description')->default(null)->change();
            $table->integer('year')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->dropColumn('slug');
            $table->text('description')->default('NULL')->change();
            $table->integer('year')->default(NULL)->change();
        });
    }
}
