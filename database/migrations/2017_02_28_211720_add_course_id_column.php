<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourseIdColumn extends Migration
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
            $table->integer('course_id')->usinged();
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->integer('user_id')->usinged();
            $table->foreign('user_id')->references('user_id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('course_id')->usinged();
        $table->dropColumn('user_id')->usinged();

        //
    }
}
