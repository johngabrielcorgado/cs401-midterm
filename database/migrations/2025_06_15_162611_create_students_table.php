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
            $table->id()->comment('Primary key for the students table');
            $table->string('first_name')->comment('Student first name');
            $table->string('last_name')->comment('Student last name');
            $table->string('program')->comment('Program or course of study');
            $table->string('enrollment_year')->comment('Year the student enrolled');
            $table->date('birthday')->comment('Student birthday');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the users table');
            $table->string('student_number')->unique()->comment('Unique student number assigned to each student');
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
