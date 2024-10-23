<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('admission_records', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->integer('year');
            $table->integer('round');
            $table->string('branch');
            $table->integer('opening');
            $table->integer('closing');
            $table->string('student_category'); // Include student category directly in this table
            $table->string('seat_pool'); // Include seat pool directly in this table
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admission_records');
    }
}
