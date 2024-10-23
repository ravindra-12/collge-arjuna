<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionCutoffsTable extends Migration
{
    public function up()
    {
        Schema::create('admission_cutoffs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->integer('round');
            $table->string('branch');
            $table->integer('opening');
            $table->integer('closing');
            
            // Foreign key constraints
            $table->foreignId('ref_student_category_id')
                  ->constrained('student_categories')
                  ->onDelete('cascade');
            $table->foreignId('seatpoolrefid')
                  ->constrained('seat_pools')
                  ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admission_cutoffs');
    }
}
