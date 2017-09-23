<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_profile_id');
            $table->string('Exam_Title');
            $table->string('Board/Institute');
            $table->integer('Passing_Year');
            $table->string('Result_Type');
            $table->float('GPA',2,2);
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
        Schema::dropIfExists('education_information');
    }
}
