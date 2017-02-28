<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTimestampsColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::table('courses', function(Blueprint $table)
    {
       // $table->timestamp()->default(\DB::raw('CURRENT_TIMESTAMP'));
        //$table->timestamp()->default(\DB::raw('CURRENT_TIMESTAMP'));
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
    }
}
