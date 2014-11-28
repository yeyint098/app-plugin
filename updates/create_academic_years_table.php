<?php namespace MMlinks\App\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAcademicYearsTable extends Migration
{

    public function up()
    {
        Schema::create('mmlinks_app_academic_years', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('academic_year');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->date('print_date');
            $table->date('school_day');
            $table->text('details');
            $table->date('import_form');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mmlinks_app_academic_years');
    }

}
