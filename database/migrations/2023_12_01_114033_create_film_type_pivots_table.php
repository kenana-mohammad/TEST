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
        Schema::create('film_type_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Film_Id')->constrained('films');//many to many
            $table->foreignId('type_id')->constrained('types');//many to many
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_type_pivots');
    }
};
