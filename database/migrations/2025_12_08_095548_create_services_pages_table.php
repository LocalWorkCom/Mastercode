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
        Schema::create('services_pages', function (Blueprint $table) {
            $table->id();
            $table->string('p_hero')->nullable();
            $table->string('main_hero')->nullable();
            $table->json('p_content')->nullable();
            $table->json('image_content')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_pages');
    }
};
