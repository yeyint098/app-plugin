<?php namespace MMlinks\App\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCampusesTable extends Migration
{

    public function up()
    {
        Schema::create('mmlinks_app_campuses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('phone');
            $table->string('principal');
            $table->string('website');
            $table->string('email');
            $table->text('details');
            $table->text('address');
            $table->text('remark');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mmlinks_app_campuses');
    }

}
