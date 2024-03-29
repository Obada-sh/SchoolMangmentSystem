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
        Schema::create('hessas', function (Blueprint $table) {
            $table->id();
            $table->integer('time');
            $table->foreignId(column:'teacher_id')->nullable()->references('user_id')->on('teachers')->onDelete('cascade');
            $table->foreignId(column:'program_day_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hessas');
    }
};
