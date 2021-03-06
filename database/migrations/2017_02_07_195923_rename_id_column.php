<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIdColumn extends Migration
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
        $table->renameColumn('id', 'course_id');
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
        Schema::table('courses', function(Blueprint $table)
        {
            
        $table->renameColumn('course_id', 'id');
        
        });

    }
}
