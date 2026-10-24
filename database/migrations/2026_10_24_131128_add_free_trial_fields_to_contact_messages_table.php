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
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->string('country')->nullable()->after('phone');
            $table->string('guideline_file')->nullable()->after('message');
            $table->string('sample_file')->nullable()->after('guideline_file');
            $table->string('type')->default('contact')->after('sample_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->dropColumn(['country', 'guideline_file', 'sample_file', 'type']);
        });
    }
};
