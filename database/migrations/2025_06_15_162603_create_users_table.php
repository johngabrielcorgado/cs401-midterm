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
        Schema::create('users', function (Blueprint $table) {
        $table->id()->comment('Primary key for the users table');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('user_name')->unique();
        $table->timestamp('registration_date')->nullable();
        $table->string('password')->comment('Hashed user password');
        $table->timestamps(); // <-- this adds updated_at and created_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
