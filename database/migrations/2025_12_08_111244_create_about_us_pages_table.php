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
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->id();
            $table->string('main_hero')->nullable();
            $table->string('p_hero')->nullable();
            $table->string('button_name')->nullable();
            $table->string('image_hero')->nullable();

            $table->json('main_mission')->nullable();
            $table->json('p_mission')->nullable();
            $table->json('image_mission')->nullable();

            $table->json('main_story')->nullable();
            $table->json('p_story')->nullable();
            $table->json('year_story')->nullable();
            $table->json('image_story')->nullable();
            
            $table->string('main_slider')->nullable();
            $table->string('p_slider')->nullable();

            $table->json('main_features')->nullable();
            $table->json('p_features')->nullable();
            $table->json('image_features')->nullable();

            $table->json('job_member')->nullable();
            $table->json('name_member')->nullable();
            $table->json('image_member')->nullable();
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_pages');
    }
};
