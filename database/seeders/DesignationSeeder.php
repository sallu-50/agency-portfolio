<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            ['name' => 'CEO', 'rank' => 1],
            ['name' => 'Project Manager', 'rank' => 2],
            ['name' => 'Operation Manager', 'rank' => 3],
            ['name' => 'Team Lead', 'rank' => 4],
            ['name' => 'QA Lead', 'rank' => 5],
            ['name' => 'Senior Data Annotator', 'rank' => 6],
            ['name' => 'Data Annotator', 'rank' => 7],
        ];

        foreach ($designations as $item) {
            Designation::updateOrCreate(
                ['name' => $item['name']],
                ['rank' => $item['rank']]
            );
        }
    }
}
