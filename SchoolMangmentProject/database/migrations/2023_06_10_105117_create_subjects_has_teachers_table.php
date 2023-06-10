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
        Schema::create('subjects_has_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'teacher_id')->references('user_id')->on('teachers')->onDelete('cascade');
            $table->foreignId(column:'subject_id')->constrained();
            $table->foreignId(column:'saf_id')->references('saf_id')->on('subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects_has_teachers');
    }
};
