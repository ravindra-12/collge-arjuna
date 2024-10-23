<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_info_id')->constrained('college_infos')->onDelete('cascade');
            $table->string('type');
            $table->string('amount');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
