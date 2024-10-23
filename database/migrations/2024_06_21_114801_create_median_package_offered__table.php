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
        Schema::create('median_package_offered_', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_info_id')->constrained('college_infos')->onDelete('cascade');
            $table->string('branch');
            $table->string('ctc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('median_package_offered_');
    }
};
