<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('librarians', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('username', 50)->unique(); // Username (unique)
            $table->string('password', 255); // Password (hashed)
            $table->timestamp('created_at')->useCurrent(); // Creation timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('librarians');
    }
}

