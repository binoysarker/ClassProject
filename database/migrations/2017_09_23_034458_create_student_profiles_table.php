<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Full name');
            $table->dateTime('Date Of Birth');
            $table->string('Marital Status',8);
            $table->string('Nationality');
            $table->string('Email');
            $table->text('Permanent Address');
            $table->integer('Home Phone');
            $table->integer('National ID');
            $table->string('District',12);
            $table->string('Country',15);
            $table->string('Blood Group',3);
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
        Schema::dropIfExists('student_profiles');
    }
}
