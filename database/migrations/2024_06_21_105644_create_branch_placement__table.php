<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branch_placement_', function (Blueprint $table) {
            $table->foreignId('college_info_id')->constrained('college_infos')->onDelete('cascade');
            $table->id();
            $table->string('branch');
            $table->string('placed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_placement_');
    }
};