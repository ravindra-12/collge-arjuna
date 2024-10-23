<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('connectivities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_info_id')->constrained('college_infos')->onDelete('cascade');
            $table->string('icon'); // e.g., 'Internet', 'Bus', 'Metro'
            $table->string('title'); // e.g., 'Internet Connectivity', 'Bus Connectivity', 'Metro Connectivity'
            $table->string('km');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('connectivities');
    }
}
