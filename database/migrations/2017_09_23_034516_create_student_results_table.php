<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->integer('user_id');
            $table->string('program');
            $table->string('semester');
            $table->string('Course_no');
            $table->string('course_title');
            $table->float('course_credit');
            $table->float('credit_earned');
            $table->string('grade',3);
            $table->float('grade_point');
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
        Schema::dropIfExists('student_results');
    }
}
