<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_info_id');  // Foreign key for CollegeInfo
            $table->string('course_name');  // Name of the course (e.g., B.E./B.Tech.)
            $table->integer('duration');    // Duration in years (e.g., 4, 5)
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('college_info_id')->references('id')->on('college_infos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
