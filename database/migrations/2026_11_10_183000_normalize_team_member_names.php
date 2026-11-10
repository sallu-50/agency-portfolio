<?php

use App\Models\TeamMember;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('team_members')
            ->select(['id', 'name'])
            ->orderBy('id')
            ->chunkById(100, function ($members): void {
                foreach ($members as $member) {
                    $formatted = TeamMember::formatName($member->name);
                    if ($formatted !== $member->name) {
                        DB::table('team_members')
                            ->where('id', $member->id)
                            ->update(['name' => $formatted]);
                    }
                }
            });
    }

    public function down(): void
    {
        // Data normalization is non-destructive and does not require rollback.
    }
};
