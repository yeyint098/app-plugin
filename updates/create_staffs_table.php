<?php namespace MMlinks\App\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStaffsTable extends Migration
{

    public function up()
    {
        Schema::create('mmlinks_app_staffs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mmlinks_app_staffs');
    }

}
