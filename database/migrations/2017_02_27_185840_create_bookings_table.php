<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('ref_no');
            $table->integer('course_id')->usigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('fullname');
            $table->string('address');
            $table->string('postcode');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->string('voucher_code');
            $table->string('voucher_code_provider');
            $table->string('health_issue');
            $table->string('special_requirement');
            $table->string('previous_learning');
            $table->string('hear_from');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
