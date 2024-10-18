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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('deviceID')->unique();
            $table->string('apikey');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('family_id')->constrained()->onDelete('cascade');
            $table->boolean('attrs')->default(true);
            $table->boolean('cmd')->default(false);
            $table->boolean('cmdexe')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
