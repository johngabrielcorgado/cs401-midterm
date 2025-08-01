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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id()->comment('Primary key for the user_roles table');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the users table');
            $table->foreignId('role_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the roles table');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
