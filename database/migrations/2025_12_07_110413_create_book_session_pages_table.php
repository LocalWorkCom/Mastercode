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
        Schema::create('book_session_pages', function (Blueprint $table) {
            $table->id();
            $table->string('p_hero')->nullable();
            $table->string('title_content')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('company_name')->nullable();
            $table->string('inquiry_type')->nullable();
            $table->string('button_name')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_session_pages');
    }
};
