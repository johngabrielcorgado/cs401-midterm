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
        Schema::create('courses', function (Blueprint $table) {
            $table->id()->comment('Primary key for the courses table');
            $table->string('subject')->comment('Name of the subject or course');
            $table->string('course_code')->unique()->comment('Unique code used to identify the course');
            $table->unsignedTinyInteger('credits')->comment('Number of credits assigned to the course');
            $table->text('description')->comment('Brief description of the course');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
