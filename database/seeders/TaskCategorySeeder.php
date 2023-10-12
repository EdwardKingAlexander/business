<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\TaskCategory;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskCategory::factory()->count(5)->create();
    }
}
