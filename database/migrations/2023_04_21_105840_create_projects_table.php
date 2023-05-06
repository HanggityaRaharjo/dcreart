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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('type_project');
            $table->foreignId('category_id');
            $table->string('land_length')->nullable();
            $table->string('land_width')->nullable();
            $table->string('total_bedroom')->nullable();
            $table->string('total_powder_room')->nullable();
            $table->string('total_maid_room')->nullable();
            $table->string('cars_acomodated')->nullable();
            $table->string('total_floor')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
