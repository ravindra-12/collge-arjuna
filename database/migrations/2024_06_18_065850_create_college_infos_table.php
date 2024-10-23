<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeInfosTable extends Migration
{
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('alsoknownastitle')->nullable(); 
            $table->string('image');
            $table->text('description');

            // overview

            $table->string('institute_name');
            $table->string('also_known_as');
            $table->string('institute_type');
            $table->string('established');
            $table->string('location');

            // end overview
           // website
           $table->string('websitetitle');
           $table->string('websitelink');


        //    end website

           
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('college_infos');
    }
}
