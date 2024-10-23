<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationalRankingsTable extends Migration
{
    public function up()
    {
        Schema::create('international_rankings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_info_id');  // Foreign key
            $table->string('category');
            $table->string('latest_ranking');  // Changed to string
            $table->string('previous_ranking')->nullable();  // Changed to string, nullable
            $table->timestamps();

            $table->foreign('college_info_id')->references('id')->on('college_infos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('international_rankings');
    }
}
