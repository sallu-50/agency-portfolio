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
        Schema::create('hero_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default('Watch our workflow');
            $table->string('sub_caption')->nullable()->default('See how we label data with precision & strict SLAs');
            $table->string('badge_text')->nullable()->default('99.8% Precision');
            $table->string('video_path');
            $table->string('poster_image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_videos');
    }
};
