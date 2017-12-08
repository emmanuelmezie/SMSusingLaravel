<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('teachers'))
        {
            Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_name');
            $table->integer('class_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->longText('subject');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('class_id')->references('id')->on('studclasses');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->timestamps();
        });

        }
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
