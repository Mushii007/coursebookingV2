<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceToCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('courses', function($table) {
        $table->integer('price');
        $table->string('course_type');
        $table->string('seats');
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::table('courses', function($table) {
        $table->dropColumn('price');
        $table->dropColumn('course_type');
        $table->dropColumn('seats');
        

        });
    }
}
