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
        Schema::create('contact_us_pages', function (Blueprint $table) {
            $table->id();
            $table->string('p_hero')->nullable();
            $table->string('title_content')->nullable();
            $table->string('p_content')->nullable();
            $table->string('image_content')->nullable();
            $table->string('form_title_content')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_pages');
    }
};
