<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('admission_records', function (Blueprint $table) {
        $table->string('quota')->nullable()->after('seat_pool');  // Add quota field after seat_pool
    });
}

public function down()
{
    Schema::table('admission_records', function (Blueprint $table) {
        $table->dropColumn('quota');
    });
    }
};
