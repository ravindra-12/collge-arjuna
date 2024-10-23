<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatPoolsTable extends Migration
{
    public function up()
    {
        Schema::create('seat_pools', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('seatpool_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seat_pools');
    }
}
