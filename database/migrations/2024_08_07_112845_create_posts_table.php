<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('PostID');
            $table->foreignId('UserID')->constrained('users')->onDelete('cascade');
            $table->foreignId('categoryID')->constrained('categories', 'categoryID')->onDelete('cascade');
            $table->string('Title');
            // $table->text('Content');
            $table->longText('Content');
            $table->string('meta-title')->nullable();
            $table->text('meta-description')->nullable();
            $table->string('og-title')->nullable();
            $table->text('og-description')->nullable();
            $table->string('twiter-title')->nullable();
            $table->text('twiter-description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
