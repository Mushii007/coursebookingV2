<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourseLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('bookings',function(Blueprint $table){

            $table->string('course_location');
            $table->string('price');
            $table->string('status');
            $table->string('quantity');

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
        Schema::table('bookings',function(Blueprint $table){

            $table->dropColumn('course_location');
            $table->dropColumn('price');
            $table->dropColumn('status');
            $table->dropColumn('quantity');

        });
    }
}
