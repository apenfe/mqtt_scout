<?php

use App\Models\Family;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('deviceID')->unique();
            $table->string('apikey');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->foreignIdFor(Family::class);
            $table->boolean('attrs')->default(true);
            $table->boolean('cmd')->default(false);
            $table->boolean('cmdexe')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
