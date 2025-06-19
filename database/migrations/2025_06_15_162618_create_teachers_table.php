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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id()->comment('Primary key for the teachers table');
            $table->string('first_name')->comment('Teacher first name');
            $table->string('last_name')->comment('Teacher last name');
            $table->string('email')->unique()->comment('Teacher email address');
            $table->string('department')->comment('Department where the teacher belongs');
            $table->date('birthday')->comment('Teacher birthday');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the users table');
            $table->string('employee_number')->unique()->comment('Unique employee number assigned to each teacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
