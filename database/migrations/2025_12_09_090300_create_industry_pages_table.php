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
        Schema::create('industry_pages', function (Blueprint $table) {
            $table->id();
            $table->string('p_hero')->nullable();

            $table->string('p_content')->nullable();
            $table->string('title_content')->nullable();
            $table->string('image_content')->nullable();
            $table->string('button_content')->nullable();

            $table->json('main_industries')->nullable();
            $table->json('p_industries')->nullable();
            $table->json('image_industries')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industry_pages');
    }
};
