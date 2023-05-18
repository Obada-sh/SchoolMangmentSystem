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
        Schema::create('session_students', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->foreignId(column:'student_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->foreignId(column:'session_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_students');
    }
};
