<?php namespace MMlinks\App\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateGradesTable extends Migration
{

    public function up()
    {
        Schema::create('mmlinks_app_grades', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('grade_no');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mmlinks_app_grades');
    }

}
