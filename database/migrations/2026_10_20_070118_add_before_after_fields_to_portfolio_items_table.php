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
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->string('before_image')->nullable()->after('image');
            $table->string('after_image')->nullable()->after('before_image');
            $table->string('before_label')->nullable()->default('Before')->after('after_image');
            $table->string('after_label')->nullable()->default('After')->after('before_label');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table) {
            $table->dropColumn(['before_image', 'after_image', 'before_label', 'after_label']);
        });
    }
};
