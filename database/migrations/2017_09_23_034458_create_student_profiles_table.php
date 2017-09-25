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
            $table->integer('user_id');
            $table->string('FullName');
            $table->dateTime('DateOfBirth');
            $table->string('MaritalStatus',15);
            $table->string('Nationality');
            $table->string('Email');
            $table->text('PermanentAddress');
            $table->string('HomePhone');
            $table->string('NationalID');
            $table->string('District',12);
            $table->string('Country',15);
            $table->string('BloodGroup',3);
            $table->string('Image_File');
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
