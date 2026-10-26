<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('before_after_sliders', function (Blueprint $table) {
            $table->string('before_image_2')->nullable()->after('after_image');
            $table->string('after_image_2')->nullable()->after('before_image_2');
            $table->string('before_image_3')->nullable()->after('after_image_2');
            $table->string('after_image_3')->nullable()->after('before_image_3');
        });

        // Migrate existing rows 2 and 3 into row 1's extra image slots if available
        $slider1 = DB::table('before_after_sliders')->where('id', 1)->first();
        $slider2 = DB::table('before_after_sliders')->where('id', 2)->first();
        $slider3 = DB::table('before_after_sliders')->where('id', 3)->first();

        if ($slider1 && $slider2 && $slider3) {
            DB::table('before_after_sliders')->where('id', 1)->update([
                'before_image_2' => $slider2->before_image,
                'after_image_2' => $slider2->after_image,
                'before_image_3' => $slider3->before_image,
                'after_image_3' => $slider3->after_image,
            ]);

            DB::table('before_after_sliders')->whereIn('id', [2, 3])->update([
                'is_active' => false,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('before_after_sliders', function (Blueprint $table) {
            $table->dropColumn([
                'before_image_2',
                'after_image_2',
                'before_image_3',
                'after_image_3',
            ]);
        });
    }
};
