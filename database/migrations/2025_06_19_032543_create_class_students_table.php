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
        Schema::create('class_students', function (Blueprint $table) {
            $table->id()->comment('Primary key for the class_students table');
            $table->foreignId('student_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the students table');
            $table->foreignId('schedule_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the schedules table');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_students');
    }
};
