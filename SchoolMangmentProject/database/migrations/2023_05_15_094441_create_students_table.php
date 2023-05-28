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
        Schema::create('students', function (Blueprint $table) {
            $table->boolean('is_in_bus');
            $table->integer('left_for_bus');
            $table->integer('left_for_qusat');
            $table->foreignId(column:'user_id')->constrained();
            $table->foreignId(column:'parent_id')->references('user_id')->on('child_parents')->onDelete('cascade');
            $table->foreignId(column:'section_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
