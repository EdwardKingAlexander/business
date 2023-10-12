<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()->count(5)->create();
    }
}
