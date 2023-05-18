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
        Schema::create('library__students', function (Blueprint $table) {
            $table->id();
            $table->date('book_date');
            $table->date('return_date');
            $table->foreignId(column:'student_id')->references('user_id')->on('students')->onDelete('cascade');
            $table->foreignId(column:'library_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library__students');
    }
};
