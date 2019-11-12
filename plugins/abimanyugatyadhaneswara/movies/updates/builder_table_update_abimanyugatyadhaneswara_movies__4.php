<?php namespace AbimanyuGatyaDhaneswara\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbimanyugatyadhaneswaraMovies4 extends Migration
{
    public function up()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->text('description')->nullable(false)->default(null)->change();
            $table->integer('year')->nullable(false)->default(null)->change();
            $table->string('slug', 191)->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('abimanyugatyadhaneswara_movies_', function($table)
        {
            $table->text('description')->nullable()->default('NULL')->change();
            $table->integer('year')->nullable()->default(NULL)->change();
            $table->string('slug', 191)->nullable()->default('NULL')->change();
        });
    }
}
