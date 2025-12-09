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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('main_hero')->nullable();
            $table->string('p_hero')->nullable();
            $table->string('button_name')->nullable();
            $table->string('image_hero')->nullable();

            $table->string('main_features')->nullable();
            $table->string('p_features')->nullable();
            $table->string('button_features')->nullable();
            $table->string('image_features')->nullable();

            $table->string('main_partner')->nullable();
            $table->string('p_partner')->nullable();
            $table->json('image_partner')->nullable();

            $table->json('p_reviews')->nullable();
            $table->json('image_reviews')->nullable();
            $table->json('name_reviews')->nullable();
            $table->json('job_reviews')->nullable();
            $table->json('rating_reviews')->nullable();

            $table->string('p_contact')->nullable();
            $table->string('image_contact')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();

            $table->string('main_footer')->nullable();
            $table->string('p_footer')->nullable();
            $table->string('image_footer')->nullable();
            $table->string('plolicy_link')->nullable();
            $table->string('contact_link')->nullable();
            $table->string('services_link')->nullable();
            $table->string('about_link')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
