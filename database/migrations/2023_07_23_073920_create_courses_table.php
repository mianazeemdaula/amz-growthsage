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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('image', 30);
            $table->text('description');
            $table->tinyInteger('lectures_count')->default(36);
            $table->unsignedInteger('fee')->default(100);
            $table->unsignedInteger('discount_fee')->default(100);
            $table->unsignedInteger('teamleader_reward')->default(100);
            $table->unsignedInteger('referral_reward')->default(100);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
