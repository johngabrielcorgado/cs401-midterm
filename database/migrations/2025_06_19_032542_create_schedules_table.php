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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id()->comment('Primary key for the schedules table');
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the teacher assigned to this schedule');
            $table->foreignId('course_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the course assigned to this schedule');
            $table->string('day_of_week')->comment('Day of the week when the class is scheduled');
            $table->time('start_time')->comment('Start time of the scheduled class');
            $table->time('end_time')->comment('End time of the scheduled class');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
